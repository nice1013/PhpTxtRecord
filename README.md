# PhpTxtRecord

<h1>This is open source</h1>

<h2>What is TxtRecord</h2>
Txt records is a php based DNS Zone editor. You can use these files to add Text records to your a new Domain zone.

<h2>Who was this built for?</h2>
This was built for Dogecoin web developers and is open source. I believe Text records are the best way to 
share dogecoin addresses around the world. As a web developer you can make use of classDns.php 
to add and delete record within the DNS zone of your website. 
I added an example file to show the various functions. <i>You will have to attach it to your site</i>


<h1>How does it work?</h1>

When you add a txt record to a domain, you need two things:

<ul>
<li>Name of Record</li>
<li>Text for record</li> 
</ul> 

For Dogecoin purposes: 
<ul>
<li>'Name of Record' = Username </li>
<li>'Text for record'  = Dogecoin Address</li> 
</ul> 




In the end you'll have a DNS zone record like this ->

<b>Username.Domain.com</b>

and when you call it within an wallet that uses TXT records, you'll recieve the Text attached to it. 
So when you write Username.Domain.com in the address bar, you'll be able to send coins to the address 
attached to it. 



Please enjoy. See you on the moon!
