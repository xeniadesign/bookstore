<?php
class BookStore_SocialWidget_Block_Icons extends
	Mage_Core_Block_Abstract implements 
	Mage_Widget_Block_Interface
	{
		protected function _toHtml()
		{
			$html =' <!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_facebook"></a>
				<a class="addthis_button_twitter"></a>
				<a class="addthis_button_pinterest_share"></a>
				<a class="addthis_button_compact"></a>
			</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d56790e03ca1e82"></script>

<!-- AddThis Button END -->';
			return $html;
		}
	}