Wordpress-AdminTabs
===================

A reusable file to add tab navigation into any wordpress plugin option pages.

How to use:

include 'class.adminTab.php'
$tabs = new AdminTabs($array);

<nav>
	<?php $tabs->buildTabs(); ?>
</nav>
<content>
	<?php $tabs->getContent(); ?>
</content>

And some more things, more details after I called my girlfriend.
