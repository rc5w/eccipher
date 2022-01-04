<?php
/**
 * Signup Page Content
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="margin-bottom:0;">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

<!--Begin Actual Content-->

<div style="line-height:1;">


</div><!--end image containers-->

<!--BEGIN TABLE-->
<table width="595" cellspacing="0" cellpadding="0" border="1" class="signup-tbl">
<tr>
	<td width="365" class="signup-tbl-top signup-tbl-cola">Subscription Options</td>
	<td width="75" class="signup-tbl-top signup-tbl-colb"><b>Basic</b><br/>(Free)</td>
	<td width="75" class="signup-tbl-top signup-tbl-colb"><b>PRO Monthly*</b><br/>$24.99 p/ mo</td>
	<td width="75" class="signup-tbl-top signup-tbl-colb"><b>PRO Yearly*</b><br/>$249.99 p/ yr<br/>SAVE 15%</td>
</tr><tr>
	<td class="signup-tbl-dscn"><span>Hit Song Deconstructed Reports:</span><br/>
		Our Hit Song Deconstructed Report of the month is a comprehensive report showing the what, how and why behind a current chart-topping hit.  Every aspect of the song is covered in-depth, including song structure, production, hooks and WOW factors, instrumentation, vocal melody, lyrics, rhyming schemes, top 10 benchmarking, A&R hit factors and much more. </td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr>
</tr><tr>
	<td class="signup-tbl-dscn"><span>Special Reports:</span><br/>
		These reports provide insight into the characteristics and trends that define all of the songs that land within the Hot 100 top 10 each quarter (one per/mo):
  		<ul>
     		<li>The Hit Songs Deconstructed Trend Report</li>
      		<li>The Hit Songs Deconstructed Genre Report</li>
      		<li>The Hit Songs Deconstructed Top 10 Deconstructed Report</li>
   		</ul>
	</td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr>

<?php /* <tr>
	<td class="signup-tbl-dscn"><span>Who's Writing the Hits?</span><br/>
		This quarterly report gives well deserved recognition to the top Pop songwriters of the quarter, spotlighting the top collaborative partnerships, the #1 hit club, a breakdown of every top 10 hit with the songwriters who crafted them and much more.</td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr><tr>
*/
?>


	<td class="signup-tbl-dscn"><span>The Hit Songs Deconstructed Music Charts:</span><br/>
		Published weekly, the Hit Songs Deconstructed Music Charts provide unique insight into today's hit songwriting trends by spotlighting the characteristics driving the Billboard Hot 100 top 10.  Charts include sub-genres, first chorus occurrence, lyrical themes, instrumentation, lead  vocal gender and more.</td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr><tr>
	<td class="signup-tbl-dscn"><span>HSD Wire</span><br/>
		The Hit Songs Deconstructed monthly e-newsletter. </td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr><tr>
	<td class="signup-tbl-dscn"><span>HSD Archive:</span><br/>
		Access to the full HSD Archive including all Hit Song Deconstructed and Trend Reports.</td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr><tr>
	<td class="signup-tbl-dscn"><span>Discounts:</span><br/>
		Benefit from discounts on Hit Songs Deconstructed songwriting competitions and events.</td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
	<td class="signup-tbl-chk"><img src="<?=get_template_directory_uri()?>-child/assets/img/sprite-checked.png" alt="Checked" /></td>
</tr>
</table>
<!--END TABLE-->
<p style="padding:0;margin:8px 0 15px;font-size:12px;"><em>*Individual subscriptions provide access to your account from up to five IP addresses per month.  Subscriptions are non-transferable and for personal use only.</em></p>

<p style="font-size:14px;margin:0 0 5px 0;padding:0;"><strong>Academic Subscription:</strong></p>
<p style="font-size:14px;padding:0;margin:0 0 15px 0;">Hit Songs Deconstructed offers flexible and highly discounted yearly licenses, and provides academic institutions with the rights to use Hit Songs Deconstructed Reports as a library resource and in the classroom. To learn more, <a href="/landing/academic-subscription-2/" target="_blank">click here.</a></p>

<p style="font-size:14px;margin:0 0 5px 0;padding:0;"><strong>Group Subscriptions / Institutional Site Licenses:</strong></p>
<p style="font-size:14px;padding:0;margin:0 0 15px 0;">Hit Songs Deconstructed offers discounted group subscriptions and site licenses for companies looking to provide employees with access to the Hit Songs Deconstructed website. To learn more please contact <a href="mailto:ypenn@hitsongsdeconstructed.com">ypenn@hitsongsdeconstructed.com</a></p>
<!--End Actual Content-->

	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->