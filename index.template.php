<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title>Fundex - Fun Community</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//ps.maribelhearn.com/style/font-awesome.css" />
	<link rel="stylesheet" href="/theme/panels.css?" />
	<link rel="stylesheet" href="/theme/main.css?" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="//ps.maribelhearn.com/style/utilichart.css?" />
	<link rel="stylesheet" href="/theme/pokedex.css?" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first" href="//ps.maribelhearn.com"><img src="/images/pokemonshowdownbeta.png" alt="Fun Community" /> Home</a></li>
				<li><a class="button cur" href="/">Fundex</a></li>
				<!--<li><a class="button" href="//replay.pokemonshowdown.com/">Replays</a></li>
				<li><a class="button" href="//pokemonshowdown.com/ladder/">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/">Forum</a></li>-->
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="https://ps.maribelhearn.com">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="pfx-panel"><div class="pfx-body">
<?php if ($_SERVER['REQUEST_URI'][0] === '/' && !ctype_alnum($_SERVER['REQUEST_URI'][1])) { ?>
		<form class="pokedex">
			<h1>
				<a href="/">Fundex</a>
			</h1>
			<ul class="tabbar centered" style="margin-bottom: 18px"><li><button class="button nav-first cur" value="">Search</button></li><li><button class="button" value="pokemon/">Pokémon</button></li><li><button class="button nav-last" value="moves/">Moves</button></li></ul>
			<div class="searchboxwrapper">
				<input class="textbox searchbox" type="search" name="q" value="<?php echo @$_REQUEST['q'] ?>" autocomplete="off" autofocus placeholder="Search Pok&eacute;mon, moves, abilities, items, types, or more" />
			</div>
			<noscript><p>
				<strong>Requires JavaScript!</strong>
			</p></noscript>
			<p class="buttonbar">
				<button type="submit" class="button"><strong>Fundex Search</strong></button> <button onclick="alert(['Who do you think you are?', 'Do a barrel roll!', 'Chuck Norris is feeling lucky.', 'Zeeky boogy doog. *explodes*', 'The Game'][Math.floor(Math.random()*4)]); return false" class="button">I'm Feeling Lucky</button>
			</p>
		</form>
		<div class="results">
		</div>
<?php } else { ?>
		<noscript><p>
			<strong>Requires JavaScript!</strong>
		</p></noscript>
		<p>
			Loading...
		</p>
<?php } ?>
	</div></div>
	<script src="/js/lib/jquery-1.12.4.min.js"></script>
	<script src="/js/lib/lodash.min.js"></script>
	<script src="/js/lib/backbone-min.js"></script>
	<script src="/js/panels.js?"></script>

	<script src="//ps.maribelhearn.com/config/config.js?"></script>
	<script src="//ps.maribelhearn.com/js/battledata.js?"></script>
	<script src="//ps.maribelhearn.com/data/search-index.js?"></script>
	<script src="//ps.maribelhearn.com/data/pokedex.js?"></script>
	<script src="//ps.maribelhearn.com/data/teambuilder-tables.js?"></script>
	<script src="//ps.maribelhearn.com/data/learnsets.js?"></script>
	<script src="//ps.maribelhearn.com/data/moves.js?"></script>
	<script src="//ps.maribelhearn.com/data/abilities.js?"></script>
	<script src="//ps.maribelhearn.com/data/items.js?"></script>
	<script src="//ps.maribelhearn.com/data/formats-data.js?"></script>
	<script src="//ps.maribelhearn.com/data/typechart.js?"></script>
	<script src="//ps.maribelhearn.com/data/aliases.js?"></script>
	<script src="//ps.maribelhearn.com/js/battle-dex-search.js?"></script>
	<script src="//ps.maribelhearn.com/js/search.js?"></script>
	<script src="/js/pokedex.js?"></script>
	<script src="/js/pokedex-pokemon.js?"></script>
	<script src="/js/pokedex-moves.js?"></script>
	<script src="/js/pokedex-search.js?"></script>
	<script src="/js/router.js?"></script>

</body></html>
