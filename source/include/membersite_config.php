<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('www.forty1photgraphy.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('eldiran234@yahoo.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'memberwait.db.7578957.hostedresource.com',
                      /*username*/'memberwait',
                      /*password*/'Air38!73ds',
                      /*database name*/'memberwait',
                      /*table name*/'realtors');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('uP5ENVCi5pcpU2o');

?>