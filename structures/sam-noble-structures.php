<?php
foreach (glob("post-types/*.php") as $filename)
{
    require_once $filename;
}

foreach (glob("taxonomies/*.php") as $filename)
{
    require_once $filename;
}
?>