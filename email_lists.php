<?php
require_once("docutil.php");

page_head("Email lists");


echo "

The follow email lists are available.
Click to subscribe or post to a list.
";
list_start();
list_item(
    "<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_projects>boinc_projects</a>",
    "For people operating BOINC projects.
    Use it to ask questions, report bugs, or request enhancements to
    the BOINC server software.
    Announcements of modifications and upgrades to BOINC will posted here.
");
list_item("<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_dev>boinc_dev</a>",
    "For people developing, debugging or porting the BOINC software.
");
list_item("<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_loc>boinc_loc</a>",
    "For people doing non-English translations
    of the BOINC GUI or web interfaces.
");
list_item(
    "<a href=http://www.ssl.berkeley.edu/mailman/listinfo/boinc_stats>boinc_stats</a>",
    "For people developing web sites showing statistics for BOINC projects."
);
list_item("<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_cvs>boinc_cvs</a>",
    "Summaries of BOINC CVS checkins are posted to this list.
    No other posts, please."
);
list_item("<a href=http://www.ssl.berkeley.edu/mailman/listinfo/boinc_opt>boinc_opt</a>",
    "For people porting and optimizing BOINC applications."
);
list_end();

page_tail();

?>