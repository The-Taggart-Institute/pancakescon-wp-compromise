# 3: Reviewing the Webroot

Whether you have VS Code running on your own machine or in our lab, you'll want to use the `File -> Open Folder` option to open the `webroot` folder. In the lab, it's on the `Desktop`. 

![VS Code Open Folder](/img/vsc-open.png)

If you downloaded the `.zip` file, make sure it's extracted, then point VS Code to the resulting folder. It'll be 4 layers deep in `var/www/html/wordpress`.

These are the files that were/are being served from `https://whisperwolf.net`, into which we believe malicious code has been injected.

At first glance, this may appear to be a normal WordPress installation. But not all is as it appears...

You may wish to note any files that jump out at you, or just explore the file/folder structure to get acquainted with it.

Let's begin our investigation in the next section, with [Nginx Logs](4-nginx.md).