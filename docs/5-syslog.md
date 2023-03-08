# 5: Syslog/Sysmon Logs

Once more into the ~~breach~~ SIEM! This time, we'll be taking a look at another dataset. This time, filter for `system.syslog`. 

## Syslog With a Twist

Our Syslog data has a bit of a surprise. This administrator has gone to the extra trouble of installing [Sysmon For Linux](https://github.com/Sysinternals/SysmonForLinux)! Sysmon vastly enriches the data we get from Syslog, as long as we can parse it. Luckily, this Elastic instance has been configured with a custom parser that does exactly that. Let's review the Sysmon Event IDs we have access to on Linux.

* **Event ID 1:** Process Creation
* **Event ID 3:** Network Connection
* **Event ID 5:** Process Termination
* **Event ID 11:** File Creation
* **Event ID 13:** File Deletion

Given what we saw in the Nginx logs, we have a number of potential starting points.

## Process Creations

We know there was one glaringly obvious command that appeared to download something from a suspicious URL. We can use the binary used in that command as a search term in top search bar. That alone will be a solid starting point.

**What directory did the suspicious command run from?**

Let's keep on Event ID 1 for now. Use that as a filter for our events (`event.id` is the field), and before clearing our specific command search term, let's use the `event.currentdirectory` as a second filter. Our suspicion so far is that an evil PHP file was assisting with code execution, meaning that directory will be the working directory of these processes.

Seems like the attacker was attempting some information exfiltration.

**What two files' contents did the attacker print?**

## The Case of the Missing File

Another notable event in our processes is a file removal. But...was it removed everywhere?

Take a look in the webroot files to see if you can find the second instance of the file that was deleted.

**What was the nickname of the file that was deleted?**

**We've now seen a couple of moves/downloads to files within `wp-content`. Why do you think these weren't used?**

_Hint: If you go back to the Nginx logs, there's an HTTP error code that may be revealing!_

So! We've discovered the activities of the attacker on the disk, but we're not quite done. Now we have to examine the files dropped into the webroot directly to understand what these files did and how they did it. Head on over to [Files](6-files.md) and button up this case!



