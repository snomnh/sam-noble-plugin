<?php
foreach (glob("post-types/*.php") as $filename)
{
    include $filename;
}

foreach (glob("taxonomies/*.php") as $filename)
{
    include $filename;
}
?>