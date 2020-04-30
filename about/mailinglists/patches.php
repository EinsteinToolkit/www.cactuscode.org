<!-- -*-mode:html;coding:utf-8-*- -->
<?php $title='Patches Information';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php');?>

<p>This list is only for patches. Anything sent to patches will be forwarded to the developers list with attachments removed, but a link left in so you can get the patch. If you want to get the patch mailed to you, please subscribe to the patches mailing list.</p>

<p>Patches do not need to be, and should not, be cc-ed to the developers list. Doing so leads to the developers list getting two copies of the message, which is pointless.</p>

<p>The patches mailing list is not for discussions, only for patches. In particular do not cc patches when discussing stuff on the developers list. Doing so negates the whole point of the list, which is to make it easy to find the messages which actually contain the patches. Also, as stated before, anything sent to patches gets automatically forwarded to developers, so we just end up with lots of copies of the files.</p>

<p>Patches sent to the patches mailing list should have clear and descriptive subject lines, and the accompanying text should clearly state what the patch is for, with at least as much information as would be necessary for a CVS commit message. Updates to old patches should preserve the subject line, and not have a new subject line - this way it is clear what is an update and what is a new patch.</p>

<p>Please try to follow these guidelines, they make it much, much, easier for us to find patches and respond to them in a timeley manner.</p>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
