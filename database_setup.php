<?
require_once("docutil.php");
page_head("Setting up a BOINC database");
echo "
<h2>Setting up a BOINC database</h2>
<p>
Each BOINC project uses a relational database to keep track of
participants, applications, work and results.
The BOINC release uses <a href=http://mysql.com>MySQL</a>.
You must use version 3.23 or greater;
previous versions have bugs that prevent BOINC from working correctly.
<p>
To use other SQL databases,
you will need to replace the files
db/mysql_util.C and db/db_mysql.C,
as well as some of the PHP files in html_user/.

<p>
You must choose a name for your BOINC database.
A single host can be used for several BOINC databases,
but they must have distinct names.

<p>
The db/ directory contains the following SQL scripts:

<dl>
<dt> schema.sql
<dd>
Create the tables in a BOINC database.
<dt> constraints.sql
<dd>
Define the constraints and indices on a BOINC database.
</dl>
";
page_tail();
?>
