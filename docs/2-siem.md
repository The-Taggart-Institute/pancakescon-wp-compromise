# 2: The Accessing the SIEM

The SIEM contains logs from the `whisperwolf.net` server. This is in fact still a live server, actively collecting data.

In a browser window, navigate to [https://siem.whisperwolf.net](https://siem.whisperwolf.net). You'll see a login prompt.

![Elastic Login](/img/elastic-login.png)

**Username**: `pancakes`

**Password**: `pancakescon2023!`

This is a **read-only** account. You can't do any harm here, so feel free to look around,but your first stop should be the hamburger menu at the top left, and the **Discover** link under **Analytics**.

![Discover](/img/elastic-menu.png)

## The Elastic Search Interface

This SIEM is built on Elastic and Kibana, often known as the "ELK stack." The "L" is for Logstash, which doesn't actually come into play here. The interface can be a bit overwhelming, so let's break it down.

![Elastic interface](/img/elastic-ui.png)

At the top (**1**) is the search bar. This is where you can enter search queries in the KQL or Lucene search syntaxes. Don't worry; we'll be walking you through those queries. 

To the right (**2**) is the timeframe selector. Pay attention to this one! Often you don't get results back because you're not looking at the right times.

On the left (**3**) is the field list. These are the fields in the currently displayed data. Clicking on a field brings up options to filter on the field values, or to visualize that field's data.

![Elastic Fields](/img/elastic-field.png)

In the center-bottom is the list of "documents" (events) that match our search parameters (**4**). By default, these are pretty tough to read. You can click on the "expand" button on the left of every row (two diagonal arrows) to see the whole document in a popover. This is useful for one document at a time, but not for analysis of multiple events. 

![Elastic Document](/img/elastic-document.png)

We'll be selecting some columns from the left to view instead of the default `Document` when the time comes. You can try now by clicking the `+` next to any of the columns in the field list. Selected fields will jump to the top of the list and be removable with the `x` next to the field name.

Spend some time playing around with the interface here, then head over to [Reviewing the Webroot](3-webroot.md).