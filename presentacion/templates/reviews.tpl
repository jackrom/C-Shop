{* reviews.tpl *}
{load_presentation_object filename="reviews" assign="obj"}
<div class="clearfix">
</div>

{if $obj->mTotalReviews != 0}
<div class="grid_8">
	<h3>Comentarios:</h3>
	<ul class="reviews-list">
	  {section name=i loop=$obj->mReviews}
	  <li>
	    <p>
	      Review by <strong>{$obj->mReviews[i].name}</strong> on
	      {$obj->mReviews[i].created_on|date_format:"%A, %B %e, %Y"}
	    </p>
	    <p>{$obj->mReviews[i].review}</p>
	    <p>Rating: [{$obj->mReviews[i].rating} of 5]</p>
	  </li>
	  {/section}
	</ul>
</div>
{else}
<div class="grid_8">
<h3>S&eacute; la primera persona en dar tu opinion!</h3>
</div>
{/if}



{if $obj->mEnableAddProductReviewForm}
{* add review form *}
<div class="grid_8">
	<h3>Agrega un comentario:</h3>
	<form method="post" action="{$obj->mLinkToProduct}" class="contact-form input-blocks">
		<div class="field">
			<label for="name"><strong>Tu nombre</strong> (required)</label>
			<input type="text" name="name" id="name" value="{$obj->mReviewerName}">
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
{else}
<div class="grid_8">
<p>Tu debes estar logueado para agregar comentarios.</p>
</div>
</div>
{/if}