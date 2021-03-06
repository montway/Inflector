<?php

/*
 * This file is part of the ICanBoogie package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie;

//@codeCoverageIgnoreStart
return function(Inflections $inflect) {

	$inflect->plural('/$/', 's');
	$inflect->plural('/s$/i', 's');
	$inflect->plural('/^(ax|test)is$/i', '\1es');
	$inflect->plural('/(alias|status)$/i', '\1es');
	$inflect->plural('/(bu)s$/i', '\1ses');
	$inflect->plural('/(buffal|tomat)o$/i', '\1oes');
	$inflect->plural('/([ti])um$/i', '\1a');
	$inflect->plural('/([ti])a$/i', '\1a');
	$inflect->plural('/sis$/i', 'ses');
	$inflect->plural('/(?:([^f])fe|([lr])f)$/i', '\1\2ves');
	$inflect->plural('/(hive)$/i', '\1s');
	$inflect->plural('/([^aeiouy]|qu)y$/i', '\1ies');
	$inflect->plural('/(x|ch|ss|sh)$/i', '\1es');
	$inflect->plural('/(matr|vert|ind)(?:ix|ex)$/i', '\1ices');
	$inflect->plural('/^(m|l)ouse$/i', '\1ice');
	$inflect->plural('/^(m|l)ice$/i', '\1ice');
	$inflect->plural('/^(ox)$/i', '\1en');
	$inflect->plural('/^(oxen)$/i', '\1');
	$inflect->plural('/(quiz)$/i', '\1zes');

	$inflect->singular('/s$/i', '');
	$inflect->singular('/(ss)$/i', '\1');
	$inflect->singular('/(n)ews$/i', '\1ews');
	$inflect->singular('/([ti])a$/i', '\1um');
	$inflect->singular('/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)(sis|ses)$/i', '\1sis');
	$inflect->singular('/(^analy)(sis|ses)$/i', '\1sis');
	$inflect->singular('/([^f])ves$/i', '\1fe');
	$inflect->singular('/(hive)s$/i', '\1');
	$inflect->singular('/(tive)s$/i', '\1');
	$inflect->singular('/([lr])ves$/i', '\1f');
	$inflect->singular('/([^aeiouy]|qu)ies$/i', '\1y');
	$inflect->singular('/(s)eries$/i', '\1eries');
	$inflect->singular('/(m)ovies$/i', '\1ovie');
	$inflect->singular('/(x|ch|ss|sh)es$/i', '\1');
	$inflect->singular('/^(m|l)ice$/i', '\1ouse');
	$inflect->singular('/(bus)(es)?$/i', '\1');
	$inflect->singular('/(o)es$/i', '\1');
	$inflect->singular('/(shoe)s$/i', '\1');
	$inflect->singular('/(cris|test)(is|es)$/i', '\1is');
	$inflect->singular('/^(a)x[ie]s$/i', '\1xis');
	$inflect->singular('/(alias|status)(es)?$/i', '\1');
	$inflect->singular('/^(ox)en/i', '\1');
	$inflect->singular('/(vert|ind)ices$/i', '\1ex');
	$inflect->singular('/(matr)ices$/i', '\1ix');
	$inflect->singular('/(quiz)zes$/i', '\1');
	$inflect->singular('/(database)s$/i', '\1');

    $inflect->irregular('leaf', 'leaves');
    $inflect->irregular('loaf', 'loaves');
	$inflect->irregular('octopus', 'octopuses');
	$inflect->irregular('virus', 'viruses');
	$inflect->irregular('person', 'people');
	$inflect->irregular('man', 'men');
	$inflect->irregular('child', 'children');
	$inflect->irregular('sex', 'sexes');
	$inflect->irregular('move', 'moves');
	$inflect->irregular('zombie', 'zombies');

	// http://easenglish.net/Files/Grammar/uncountable%20words.pdf

	$inflect->uncountable(explode(' ', 'advice art coal baggage butter clothing cotton currency equipment experience fish flour food furniture gas homework impatience information jeans knowledge leather love luggage money oil patience police polish progress research rice series sheep silk soap species sugar talent toothpaste travel vinegar weather wood wool work'));

};
//@codeCoverageIgnoreEnd
