# PancakesCon 4: Compromised Website Village

Welcome to PancakesCon 4! This village will walk you through the investigation of a realistic website compromise. Using the evidence and tools provided, you'll investigate **how** our victim site was compromised, **what** tools the attackers used, and **when** then attack took place. Then, we'll discuss what could have prevented the compromise, and how to harden the server going forward.

## Scenario

The year is 2033. Cybernetic enhancements have become commonplace, available as a medical service to those who can afford it.

Somehow, WordPress is still in common usage.

One such lab, known as WhisperWolf Cybernetics, has recently been the victim of a website compromise. The administrator of the site discovered an unusual user having been created in the site backend, and has called in professional incident responders—that'd be you—to investigate further.

## Objectives

Throughout this investigation, you are tasked with answering the following questions:

1. When did the attack take place?
2. How did the attackers gain initial access to the site?
3. How did they establish persistence?
4. What were the attackers _unable_ to do?
5. What was the impact of the attack?
6. How could this have been prevented?

You will be using 2 sources of information to answer these questions: a copy of the website's root directory, containing the PHP and other files that make up the site's code, and access to the WhisperWolf Security Information and Event Monitoring platform (**SIEM**), which contains server logs from the attack.

**This is not a CTF**. There are no flags, no easy-to-answer questions. Our goal for this village is to show you what a real incident response investigation looks like.

To that end, it would be a very good idea if you had a way to take notes, including screenshots, as you complete the lab. We like [Notion](https://notion.so), [Joplin](https://joplinapp.org), and [Flameshot](https://flameshot.org).

## Getting Started

You have 2 ways of participating in this village: on your own equipment, or optionally in our custom-made virtual environment. The virtual environment has everything you need to complete the lab.

When you're ready to begin, head over to [1: Setup](1-setup.md).

Brought to you by **[The Taggart Institute](https://taggartinstitute.org)**.


<center><img height="200" src="/img/tti_avatar.png" /></center>