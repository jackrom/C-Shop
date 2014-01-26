<?php /* Smarty version 2.6.26, created on 2013-06-18 20:47:00
         compiled from reviews.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'reviews.tpl', 2, false),array('modifier', 'date_format', 'reviews.tpl', 14, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'reviews','assign' => 'obj'), $this);?>

<div class="clearfix">
</div>

<?php if ($this->_tpl_vars['obj']->mTotalReviews != 0): ?>
<div class="grid_8">
	<h3>Comentarios:</h3>
	<ul class="reviews-list">
	  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mReviews) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	  <li>
	    <p>
	      Review by <strong><?php echo $this->_tpl_vars['obj']->mReviews[$this->_sections['i']['index']]['name']; ?>
</strong> on
	      <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mReviews[$this->_sections['i']['index']]['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>

	    </p>
	    <p><?php echo $this->_tpl_vars['obj']->mReviews[$this->_sections['i']['index']]['review']; ?>
</p>
	    <p>Rating: [<?php echo $this->_tpl_vars['obj']->mReviews[$this->_sections['i']['index']]['rating']; ?>
 of 5]</p>
	  </li>
	  <?php endfor; endif; ?>
	</ul>
</div>
<?php else: ?>
<div class="grid_8">
<h3>S&eacute; la primera persona en dar tu opinion!</h3>
</div>
<?php endif; ?>



<?php if ($this->_tpl_vars['obj']->mEnableAddProductReviewForm): ?>
<div class="grid_8">
	<h3>Agrega un comentario:</h3>
	<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToProduct; ?>
" class="contact-form input-blocks">
		<div class="field">
			<label for="name"><strong>Tu nombre</strong> (required)</label>
			<input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['obj']->mReviewerName; ?>
">
		</div>
		<div class="field">
			<label for="contact-message"><strong>Your Message</strong> (required)</label>
			<textarea name="review" id="comments" cols="30" rows="10">[Agrega tu comentario aqu&iacute;]</textarea>
		</div>
		<div class="field">
			<label for="contact-message"><strong>Tu evaluaci&oacute;n:</strong> (required)</label>
            <input type="radio" name="rating" value="1" /> 1
            <input type="radio" name="rating" value="2" /> 2
            <input type="radio" name="rating" value="3" checked="checked" /> 3
            <input type="radio" name="rating" value="4" /> 4
            <input type="radio" name="rating" value="5" /> 5
		</div>
		<div class="button-wrapper">
			<input type="button" name="AddProductReview" id="submit" value="Agregar comentario">
		</div>
	</form>
	
</div>
</div>
<?php else: ?>
<div class="grid_8">
<p>Tu debes estar logueado para agregar comentarios.</p>
</div>
</div>
<?php endif; ?>