<!-- This is the example page of the stack, you can see here what the different components looks like by default with-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <title>Styleguide for euphros front-end development stack</title>

    <meta property="og:title" content=""">
    <meta property="og:description" content="">
    <meta property="og:url" content=""">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="website">


</head>
<body>

    <div id="MainWrap" class="Styleguide_mainWrap">

		<?php // FONT FAMILY?>
		<section class="Spaced_normal" id="FontFamilies">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Font families</h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-6 Spaced_thin-noTop-SMmax">
						<p><strong>Roboto</strong></p>
						<code class="BreakWord">@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);</code> <br>
						<br>
						<ul>
							<li class="Fw-light">Light - $ff-light <br>.Fw-light</li>
							<li class="Fw-regular">Regular - $ff-regular <br>.Fw-regular</li>
							<li class="Fw-bold">Bold - $ff-bold <br>.Fw-bold</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<?php // HEADING?>
		<section class="Spaced_normal" id="Headings">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Headings</h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h1>Heading 1</h1>
						
						<h2 class="NoMargin">Heading 2</h2>
						
						<h3>Heading 3</h3>
						
						<h4>Heading 4</h4>

						<h5>Heading 5</h5> 

						<h6>Heading 6</h6>
					</div>
				</div>
			</div>
		</section>

		<?php// PARAGRAPHE, UL, OL, BLOCKQUOTE?>
		<section class="Spaced_normal" id="Texts">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Texts</h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h3>Paragraphe, link</h3>
					</div>
					<div class="col-MD-12">
						<p>Bacon ipsum dolor amet short ribs pork swine, shank kevin boudin meatball tail salami short loin tenderloin sausage. <a href="#">Porchetta short ribs sausage</a> tenderloin chuck shank ground round chicken tri-tip landjaeger t-bone prosciutto beef. Pastrami tenderloin frankfurter, drumstick beef ribs ham hock pork loin filet mignon chuck pork belly cupim meatball shank tongue.</p>

						<p>Burgdoggen alcatra doner shank, ground round tenderloin pork chop pork belly cupim pork loin. Beef ribeye filet mignon tail cow pork tenderloin meatball. Beef ribs venison flank, alcatra brisket porchetta jerky spare ribs frankfurter. Filet mignon shank turducken capicola brisket. Strip steak kevin filet mignon rump bresaola short loin corned beef pork sausage.</p>	
					</div>

				</div>

				<div class="row Spaced_thin-noBottom">
					<div class="col-MD-12">
						<h3>UL, OL</h3>
					</div>
					<div class="col-MD-3">
						<ol>
							<li>ol</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
						</ol>
					</div>
					<div class="col-MD-3">
						<ul>
							<li>ul</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
						</ul>
					</div>
					<div class="col-MD-3">
						<ul class="unstyled">
							<li>ul with class unstyled</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
							<li>Bacon</li>
						</ul>
					</div>
				</div>

				<div class="row Spaced_thin-noBottom">
					<div class="col-MD-12">
						<h3>Blockquote</h3>
					</div>
					<div class="col-MD-12">
						<blockquote>
							Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
						</blockquote>
					</div>
				</div>
			</div>
		</section>


		<?php // Buttons?>
		<section class="Spaced_normal" id="Buttons">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Buttons</h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h3>Colors</h3>
					</div>
				</div>

				<div class="row Spaced_thin-noTop">
					<div class="col-MD-6">
						<h4><small>Primary</small></h4>
						<a href="#" class="Btn">Btn</a>
						<a href="#" class="Btn Btn-light">Btn-light</a>
						<a href="#" class="Btn Btn-dark">Btn-dark</a>
					</div>

					<div class="col-MD-6">
						<h4><small>Secondary</small></h4>
						<a href="#" class="Btn Btn-second">Btn-second</a>
						<a href="#" class="Btn Btn-second Btn-light">Btn-second Btn-light</a>
						<a href="#" class="Btn Btn-second Btn-dark">Btn-second Btn-dark</a>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h3>Sizes</h3>
					</div>
				</div>

				<div class="row Spaced_thin-noTop">
					<div class="col-MD-6">
						<h4><small>Thin</small></h4>
						<a href="#" class="Btn Btn-thin">Btn-thin</a>
						<a href="#" class="Btn Btn-second Btn-thin">Btn-thin</a>
					</div>

					<div class="col-MD-6">
						<h4><small>Large</small></h4>
						<a href="#" class="Btn Btn-large">Btn-large</a>
						<a href="#" class="Btn Btn-second Btn-large">Btn-large</a>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h3>Alternate states</h3>
					</div>
				</div>

				<div class="row Spaced_thin-noTop">
					<div class="col-MD-6">
						<h4><small>Gray</small></h4>
						<a href="#" class="Btn Btn-gray">Btn-gray</a>
						<a href="#" class="Btn Btn-grayLight">Btn-grayLight</a>
						<a href="#" class="Btn Btn-grayDark">Btn-greyDark</a>
					</div>

					<div class="col-MD-6">
						<h4><small>Bordered</small></h4>
						<a href="#" class="Btn Btn-bordered">Btn-bordered</a>
						<a href="#" class="Btn Btn-second Btn-bordered">Btn-bordered</a>
						<a href="#" class="Btn Btn-grayDark Btn-bordered">Btn-bordered</a>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<h3>With icons</h3>
					</div>
				</div>

				<div class="row Spaced_thin-noTop">
					<div class="col-MD-12">
						<button data-icon="build" class="Btn Icon-center"></button>

						<button class="Btn Btn-second">
							<span data-icon="build" class="Icon-left">
								Left
							</span>
						</button>

						<button class="Btn Btn-grayDark Icon-right">
							<span data-icon="hd" class="Icon-right">
								Right
							</span>
						</button>

						<button class="Btn Btn-second Btn-bordered">
							<span data-icon="supervisor_account" class="Icon-left">Texte et icone</span>
						</button> 

						<button data-icon="hd" class="Btn Icon-center Btn-round"><?php // :empty ?></button>
						<button data-icon="volume_up" class="Btn Btn-second Icon-center Btn-round"><?php // :empty ?></button>
						<button data-icon="face" class="Btn Btn-bordered Icon-center Btn-round"><?php // :empty ?></button>
					</div>
				</div>

				<div class="row Spaced_thin-noBottom">
					<div class="col-MD-12">
						<h3>With SVG</h3>
					</div>
				</div>

				<div class="row Spaced_thin-noTop">
					<div class="col-MD-12">
						<a href="#" class="Btn">
							<span data-icon="SVG" class="Icon-left">
								<?= file_get_contents("../assets/img/socials/facebook.svg"); ?> 
								Facebook
							</span>
						</a>
					</div>
				</div>

			</div>
		</section>

		<?php
			// ICONS
		?>
		<section class="Spaced_normal" id="Icons">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Icons</h2>
						<hr>

						<a href="https://material.io/icons/" target="_blank">https://material.io/icons/</a>
					</div>
				</div>
			</div>
		</section>


		<?php
			// TABLE
		?>
		<section class="Spaced_normal" id="Tables">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Tables</h2>
						<hr>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">

						<table class="boxed">
							<thead>
								<th>Legend</th>
								<th>Column 1</th>
								<th>Column 2</th>
								<th>Column 3</th>
							</thead>
							<tbody>
								<tr>
									<td><?php // :empty ?></td>
									<td>Value</td>
									<td>19$</td>
									<td>209$</td>
								</tr>
								<tr>
									<td>Value</td>
									<td>Value</td>
									<td>19$</td>
									<td>209$</td>
								</tr>
							</tbody>
						</table>
			
						<table>
							<thead>
								<th>Legend</th>
								<th>Column 1</th>
								<th>Column 2</th>
								<th>Column 3</th>
							</thead>
							<tbody>
								<tr>
									<td><?php // :empty ?></td>
									<td>Value</td>
									<td>19$</td>
									<td>209$</td>
								</tr>
								<tr>
									<td>Value</td>
									<td>Value</td>
									<td>19$</td>
									<td>209$</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</section>

		<?php// FORM?>
		<section class="Spaced_normal" id="Forms">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin">Forms</h2>
						<hr>
					</div>
				</div>

				<?php // Inputs - Without icons ?>
				<div class="row">
					<div class="col-SM-6">
						<div class="FormElement FormElement-boxed Icon-right" data-icon="call">
							<input type="text" placeholder="FormElement-boxed"> 
						</div>  
					</div>
					<div class="col-SM-6">
						<div class="FormElement Icon-left" data-icon="phone_android">
							<input type="text" placeholder="FormElement hr">
							<hr>
							<span class="line"></span>
						</div>
					</div>
				</div>

				<?php // Inputs - Iconed ?>
				<div class="row">
					<div class="col-SM-6"> 
						<div class="FormElement FormElement-bordered">
							<input type="text" placeholder="FormElement-bordered">
						</div>
					</div>
					<div class="col-MD-6">
						<?php // with a label
							// <p class="Label">C.V. *</p>
						?>
						<div class="FormElement FormElement-bordered FormElement_upload Icon-right" data-icon="file_upload"">
							<label for="UploadCV">File upload</label>
							<input id="UploadCV" required="required" name="c.v." type="file">
						</div>
					</div>
				</div>

				<?php // Inputs - Labeled ?>
				<div class="row">
					<div class="col-SM-6"> 
						<label for="">Indiquez votre prénom:</label>
						<div class="FormElement FormElement-boxed">
							<input type="text" placeholder="Prénom">
						</div>
					</div>
					<div class="col-SM-6">
						<label for="">Indiquez votre nom:</label>
						<div class="FormElement">
							<input type="text" placeholder="Nom">
							<hr>
							<span class="line"></span>
						</div>
					</div>
				</div>

				<?php // Textarea ?>
				<div class="row">
					<div class="col-SM-6">
						<label for="">Textarea boxed</label>
						<div class="FormElement FormElement-boxed">
							<textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuSMod tempor incididunt</textarea>
						</div>
					</div>
					<div class="col-SM-6">
						<label for="">Textarea hr</label>
						<div class="FormElement">
							<textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</textarea>
							<hr>
						</div>
					</div>
				</div>

				<?php // select ?>
				<div class="row">
					<div class="col-MD-6">
						<label for="">select</label>
						<div class="FormElement FormElement-boxed FormElement_select Icon-right" data-icon="expand_more">
							<select name="" id="">
								<option value="">option 1</option>
								<option value="">option 2</option>
								<option value="">option 3</option>
							</select>
						</div>
					</div>
				</div>

				<?php // Checkboxes and radio ?>
				<div class="row">

					<div class="col-MD-6">
						<div class="FormElement FormElement_checkbox FormElement-boxed">
							<input id="el-1" type="checkbox" placeholder="Texte">
							<label for="el-1">Checkbox</label>
						</div>
						<div class="FormElement FormElement_radio FormElement-boxed">
							<input id="el-2" type="radio" placeholder="Texte">
							<label for="el-2">Radio</label>
						</div>
						<div class="FormElement FormElement_checkbox">
							<input id="el-3" type="checkbox" placeholder="Texte">
							<label for="el-3">Checkbox</label>
						</div>
						<div class="FormElement FormElement_radio">
							<input id="el-4" type="radio" placeholder="Texte">
							<label for="el-4">Radio</label>
						</div>
					</div>

					<div class="col-MD-6">
						<div class="FormElement FormElement_checkbox FormElement-boxed">
							<input checked id="el-5" type="checkbox" placeholder="Texte">
							<label for="el-5">Checkbox</label>
						</div>
						<div class="FormElement FormElement_radio FormElement-boxed">
							<input checked id="el-6" type="radio" placeholder="Texte">
							<label for="el-6">Radio</label>
						</div>
						<div class="FormElement FormElement_checkbox">
							<input checked id="el-7" type="checkbox" placeholder="Texte">
							<label for="el-7">Checkbox</label>
						</div>
						<div class="FormElement FormElement_radio">
							<input checked id="el-8" type="radio" placeholder="Texte">
							<label for="el-8">Radio</label>
						</div>
					</div>
				</div>

				<?php // WITH ERRORS ?>
				<div class="row Spaced_thin-noBottom">
					<div class="col-MD-12">
						<h3>With errors</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<div class="Alert has-success">
							Alert has-success
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-MD-12">
						<div class="Alert has-error">
							Alert has-error
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-SM-6">

						<div class="FormElement FormElement-boxed has-success">
							<input type="text" placeholder="FormElement has-success"> 
						</div> 
						<label for="">Has success</label>

					</div>
					<div class="col-SM-6">

						<div class="FormElement has-error">
							<input type="text" placeholder="FormElement has-error">
							<hr>
							<span class="line"></span>
						</div>
						<label for="">Has error</label>

					</div>
				</div>

				<div class="row">
					<div class="col-MD-6">
						<div class="FormElement FormElement_checkbox FormElement-boxed has-error">
							<input id="el-10" type="checkbox" placeholder="Texte">
							<label for="el-10">Texte</label>
						</div>

						<div class="FormElement FormElement_radio FormElement-boxed has-success">
							<input id="el-20" type="radio" placeholder="Texte">
							<label for="el-20">Texte</label>
						</div>
						<div class="FormElement FormElement_checkbox has-error">
							<input id="el-30" type="checkbox" placeholder="Texte">
							<label for="el-30">Texte</label>
						</div>
						<div class="FormElement FormElement_radio has-success">
							<input id="el-40" type="radio" placeholder="Texte">
							<label for="el-40">Texte</label>
						</div>
					</div>
				</div>

				<?php // Submit ?>
				<div class="row Spaced_thin-noBottom">
					<div class="col-MD-12">
						<h3>Submit</h3>
					</div>
				</div>

				<div class="col-MD-3">
						<div class="FormElement FormElement_submit">
							<button type="submit" class="Btn Btn-bordered">Send</button>
							<span>Sending...</span>
						</div>
					</div>

					<div class="col-MD-3">
						<div class="FormElement FormElement_submit">
							<button type="submit" class="Btn Btn-bordered disabled">Sending...</button>
							<span>Sending...</span>
						</div>
					</div>


			</div>
		</section>


		<?php // Accordions?>
		<section class="Spaced_normal" id="Accordions">
			<div class="container">
				<div class="row">
					<div class="col-MD-12">
						<h2 class="NoMargin-bottom">Accordions / collapsible block</h2>
						<small>add class Accordions-collapse to have collapsable block</small>
						<div class="Margin-bottom-large"></div>
						<!-- <hr> -->
					</div>
				</div>
				<div class="row">
					<div class="col-MD-6">

						<div class="Accordions NoMargin">
						<?php // To have collapse block : <div class="Accordions is-collapsible"> ?>

							<?php for ($i=1; $i < 5; $i++) { ?>
							<div class="Accordions_row">
								<div class="Accordions_row_header">
									<h2 class="-title h4 Icon-righ js-accordion-trigger" data-icon="expand_more">Accordion <?php echo $i; ?></h2>
								</div>
								<div class="Accordions_row_content">
									<div class="Accordions_row_content_inner">
										<div class="Editable">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quia modi quo fugiat nam dolore, eaque ad exercitationem accusamus vitae. Laboriosam totam cupiditate natus recusandae numquam doloribus, eaque deleniti ratione.</p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

						<br>
						<div class="Editable">
							<p class="NoMargin-bottom">Second accordion block</p>
						</div>

						<div class="Accordions is-collapsible NoMargin">
						<?php // To have collapse block : <div class="Accordions is-collapsible"> ?>

							<?php for ($i=1; $i < 5; $i++) { ?>
							<div class="Accordions_row">
								<div class="Accordions_row_header">
									<h2 class="-title h4 Icon-right js-accordion-trigger" data-icon="expand_more">Accordion <?php echo $i; ?></h2>
								</div>
								<div class="Accordions_row_content">
									<div class="Accordions_row_content_inner">
										<div class="Editable">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quia modi quo fugiat nam dolore, eaque ad exercitationem accusamus vitae. Laboriosam totam cupiditate natus recusandae numquam doloribus, eaque deleniti ratione.</p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>

					</div>
				</div>
			</div>
		</section>

	</div>    
</body>
</html>