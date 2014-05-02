<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mr
 */
?>


<div class="content-wrapper">
       <div class="content">
        <input class="show-content" type="checkbox" id="show-content" name="show-content"> 
        <header class="content-header">
          <label class="content-toggle" for="show-content">i</label>
          <h1 class="page-title">Raw Material: Llareggub Revisited</h1>
          <!-- Production date - ACF datepicker Field maybe only show year?? Will discuss with Marc R-->
          <div class="date">May 2014</div>
          <!-- Production credit - probably just a text field -->
          <p class="credit">Commissioned by National Theatre Wales in partnership BBC Wales</p>   
        </header>
        <div class="content-full">
          <p>Curently I am ensconced  in a new commission for NTW in partnership BBC Wales called RAW MATERIAL: LLAREGGUB REVISITED which is part of DT 100 season and in creative cahoots with Laugharne based writer Jon Tregenna.</p>
          <p>The event takes place in Laugharne over 4 days in May when 600 people will be taken on a fantastical journey through the place described by Dylan as, '...the strangest town in Wales.'</p>
          <p>In Laugharne groups of 'tourists' arrive for a traditional guided tour around its iconic landmarks. The tour is hijacked by VOYCE, a wiry eccentric bearded madman who wants to present his own homage to Dylan Thomas, Laugharne and Under Milk Wood. The tour parties are presented with a plethora  of installations and interventions that give an insight into what Dylan found fascinating about the town and its people. VOYCE believes that if Dylan was alive today he would still be able to pen Under Milk Wood . VOYCE is a pilferer, a poacher and a pirate and using raw material 'found' around the town as well as local people and their stories he has created a unique  immersive experience. Along the route they will see...Several sheds. Live owls. Stuffed birds. A phantom carnival float. Salt lace. A swinging buoy. A 1950's bus. Condom sausages. A mirrored graveyard. Singing web footed cockle women. A boat-roofed library. A corrugated tin terrace. The real life Willy Nilly postman. A condemned sail. A slow-motion chattering of jack-daws. School-kids rapping Dylan. Knitted Under Milk Wood figures. Brassiere bunting. A ship-shaped bar. Bosom bread. A bloody livestock crime scene. Bible Black beer. Golden cockleshells. Black canoes and a Rolls Royce fish and chip van.</p>
        </div>
      </div>
    </div>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'mr' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
