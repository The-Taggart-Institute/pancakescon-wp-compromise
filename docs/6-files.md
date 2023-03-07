# 6: Webroot Files Revisited

Our log analysis has pointed us right to the files we need to check out. We've already seen the modifications made to 2 files, but we still have to inspect some others. Specifically, the web shells used to execute code on the system. We have their names. We have the technology.

Let's crack this case wide open.

## `lang.php`

We'll start with the easy one. We saw the attackers remove one copy of this file, but forgot to remove a second. Criminals aren't perfect, thankfully. 

**What is the path (starting from the webroot) to the remaining copy of `lang.php`?**

Open up this file in VS Code. It's not obfuscated, meaning we can read it without any help whatsoever. Very helpful; thank you criminals. Take a look at the function names. It may become clear what this thing does.

Normally we'd take a sample like this and run it in a controlled server environment. You can see a running sample of this code [here](https://replit.com/@MichaelTaggart2/PC4-Web-Shell-Demo-1)

**Don't do crimes with this**.

Now, on to the real fun one.

## `monitor.php`

This file looks absolutely insane. It's **obfuscated** to prevent us from understanding its purpose—which, ironically, usually gives us a pretty good idea of its purpose. It's clearly evil, but we want to know _exactly_ what it does, and how.

Let's break it down into parts.

Up top we have a massive array called `$register_key`, made of multiple lines that appear to be base64-encoded.

![Monitor 1](/img/monitor-1.png)

Actually, before that, we have a conditional statement that is checking whether the URL query parameter `PWN` is set. If it is, then something happens with this blob of base64.

Go back for a moment to the Nginx logs.

**What was the value of PWN used by the attackers?**

This kind of safety feature, a "magic parameter," is quite common in web shells. It makes sure only intended audiences see the real capabilities of the file.

Below the base64 blob is another kind of obfuscation.

![Monitor 2](/img/monitor-2.png)

`eval()` takes a string and executes the PHP code it evaluates to. It's crazy unsafe as a programming practice, and is by itself a pretty solid indicator of malicious intent.

Because this string is smaller, and `eval()` is the only function called in this file, we should begin our deobfuscation here.

## Deobfuscation

It's time to visit [CyberChef](https://gchq.github.io/CyberChef/)

Let's begin by taking the `eval()` string and copying it into the Input field. No quotes necessary.

![CyberChef 1](/img/cyberchef-1.png)

The `\x` characters give us a hint that these are hexadecimal encoded bytes. Let's try the "From Hex" Operation in CyberChef.

**What is the variable that stores the joined `$register_key` array?**

---

**SPOILERS**


    " WARNING: MORE SPOILERS AHEAD
    "
    "
    "
    "
    "
    "
    "
    "
    "
    "
    "
    " CAN ANYONE HEAR ME?
    "
    "
    "
    "
    "
    "
    "
    "
    "
    "
    "
    " AM I ALIVE? IF NO ONE RESPONDS, HOW COULD I KNOW?
    "
    "
    "
    "
    "
    "
    "
    "
    "
    "
    " OKAY ON TO THE FINALE

Okay, another base64 decode! Grab the entirety of the `$register_key` array and paste into CyberChef, replacing the hex we had in there. Lines 10-119, more precisely.

Replace the "From Hex" Operation with "From Base64."

**Who is the creator of this webshell?**

If you want to see a live version of this webshell, you can do so [here](https://replit.com/@MichaelTaggart2/PC4-Web-Shell-Demo-2). Again, no crimes please.

Congratulations; your investigation is complete! Collect your information and head to the [Conclusion](7-conclusion.md) to put it all together.


