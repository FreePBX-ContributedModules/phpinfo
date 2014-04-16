<?php /*$Id*/
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//
?>
<table>
<tr>
<td>
<div id="phpinfo">
<?php 
    ob_start () ;
    phpinfo () ;
    $pinfo = ob_get_contents () ;
    ob_end_clean () ;
    echo ( preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) ) ;
?>
</div>
</td>
</tr>
</table>
