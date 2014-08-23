<?php
// get the form inputs
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));

// create a new pcb object
$pcb = new ElggObject();
$pcb->subtype = "pcb";
$pcb->title = $title;
$pcb->description = $body;

// for now make all my_blog posts public
$pcb->access_id = ACCESS_PUBLIC;

// owner is logged in user
$pcb->owner_guid = elgg_get_logged_in_user_guid();

// save tags as metadata
$pcb->tags = $tags;

// save to database and get id of the new my_blog
$pcb_guid = $pcb->save();

// if the my_blog was saved, we want to display the new post
// otherwise, we want to register an error and forward back to the form
if ($pcb_guid) {
   system_message("Your pcb entry was saved");
   forward($pcb->getURL());
} else {
   register_error("The pcb could not be saved");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}