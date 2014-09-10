Wordpress-AdminTabs
===================

A reusable file to add tab navigation into any wordpress plugin option pages.

Example use:

    <?php
    
    include 'class.adminTab.php';
    
    $tabs = array(
    	array('Overview', 'general', 'arbitrary.php'),
    	'Galleries',
    	'Tags',
    	'Style'
    );
    
    $tabs = new AdminTabs($tabs);
    
    ?>
    
    <div class="adminArea">
    	<nav class="tabs">
    		<?php $tabs->buildTabs(); ?>
    	</nav>
    	<div class="content">
    		<?php $tabs->assignContent(); ?>
    	</div>
    </div>
    
    ?>
