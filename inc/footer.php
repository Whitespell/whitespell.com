	<footer id="footer">
		<div class="container">
			<p>Whitespell <?php echo date('Y'); ?></p> |
			<ul class="inline">
				<a href="#"><li>License</li></a>
				<a href="#"><li>About</li></a>
			</ul>
		</div>
	</footer>

<script>
<?php include_once "js/libs/google-fastbutton.js"; ?>

	var bind;
	if(window.addEventListener){
		bind = function(type, el, listener){
			el.addEventListener(type, listener, false);
		};
	} else {
		bind = function(type, el, listener){
			el.attachEvent(type, listener);
		};
	}

	//Main nav
	(function(){

		var nav = document.getElementById('main-nav'),
			navTrigger = document.getElementById('main-nav-trigger');

		new FastButton(navTrigger, function(e){
			e.preventDefault();
			if(nav.className.indexOf('hidden') !== -1){
				nav.className = nav.className.replace('hidden','');
			} else {
				nav.className += ' hidden';
			}
		});

	})();

	//Docs nav
	(function(){

		var nav = document.getElementById('docs-nav');

		if(nav !== null){

			var navTrigger = document.getElementById('docs-nav-trigger'),
				navSearch = document.getElementById('docs-nav-search'),
				navItems = document.getElementById('docs-nav-items'),
				navItemsTags = navItems.getElementsByTagName('a');

			new FastButton(navTrigger, function(e){
				e.preventDefault();
				if(nav.className.indexOf('hidden') !== -1){
					nav.className = nav.className.replace('hidden','');
				} else {
					nav.className += ' hidden';
				}
			});

			bind('keyup', navSearch, function(e){
				var input = e.target;

				for(var i = 0, count = navItemsTags.length; i < count; i++){
					var curr = navItemsTags[i],
						currVal = curr.innerText.toLowerCase(),
						inDescription = curr.hasAttribute('data-description') ? curr.getAttribute('data-description').toLowerCase().indexOf(inputVal) !== -1 : false,
						inputVal = input.value.toLowerCase();

					if(currVal.indexOf(inputVal) === -1 && !inDescription){
						curr.className = 'hidden';
					} else {
						curr.className = '';
					}
				}
			});

		}

	})();

<?php
	include_once "fonts/ss-standard/ss-standard.js";

	//Prism
	include_once "js/libs/prism/prism.js";

	//Codemirror
	//include_once "js/libs/codemirror-4.4/lib/codemirror.js";
	//include_once "js/libs/codemirror-4.4/mode/javascript/javascript.js";
?>

/*
	var c = document.getElementById('code-example');

	CodeMirror(document.getElementById('code-example'), {
		value: "new WS({\n\tid: 'system',\n\tworkerId: 24n,\n\tparseCallback: function(data){\n\t\treturn data; //return all data\n\t},\n\tonComplete: function(){\n\t\talert('init!')\n\t}\n});",
  		mode:  "javascript",
  		lineNumbers: true
	});
*/
</script>

</body>
</html>