/*
* Librairie d'animation parallax. Cette librairie est fait pour
* fonctionner avec la custom scrollbar.
* (peut être tweaker pour fonctionner sans la scrollbar custom)
*
* - Ajax ready
*
* Pour "parallaxer" un element, simple ajouter la class 'js-parallax' sur le container. 
* Ensuite, ajouter la class 'js-parallax-item' sur chaque élement à parallaxer. Le translateY
* va être animé on scroll. Vous pouvez également définir la vitesse du translateY:
* simplement ajouter data-ys="X". Remplacer X par un chiffre. Plus le chiffre augmente,
* plus que l'intensité du parallax diminue (default: 20).
*/

// **---------------------------------------------------**
// -------------------------------------------------------
// Global variables BEGIN
var ParallaxItems = [];
// Global variables END
// **---------------------------------------------------**
// -------------------------------------------------------


// **---------------------------------------------------**
// -------------------------------------------------------
// Object BEGIN
function Parallax(component, item, height, offsetTop, visible, speed) {
	/*
	* constructor
	*/
	this.component = component;
	this.height = height;
	this.offsetTop = offsetTop;
	this.visible = visible;
	this.speed = speed;
	this.item = item;
}
// Object END
// **---------------------------------------------------**
// -------------------------------------------------------


// **---------------------------------------------------**
// -------------------------------------------------------
// Prototype BEGIN

// init
Parallax.prototype.setup = function() {
	/*
	* get all the elements
	*/
	var elements = document.getElementsByClassName('js-parallax');

	if (elements.length > 0 && screenWidth > 990) {
		for (var i = 0; i < elements.length; i++) {
			var c = elements[i];
			var component = c;
			var item = component.querySelector('.js-parallax-item');
			var bounding = component.getBoundingClientRect();
			var height = bounding.height;
			var offsetTop = bounding.top;
			var visible = currentlyVisible(component);
			var speed = 20; // default

			if (item) {
				if (item.dataset.ys) {
					speed = item.dataset.ys;
				}
				
				var obj = new Parallax(component, item, height, offsetTop, visible, speed);

				/* push the object in the array */
				ParallaxItems.push(obj);

				/* init the object */
				Parallax.prototype.init(i);
			}
		}
	}
}

Parallax.prototype.watch = function() {
	if (ParallaxItems.length > 0) {
		for (var i = 0; i < ParallaxItems.length; i++) {
			var obj = ParallaxItems[i];
			var component = obj.component;
			var item = obj.item;
			let offsetTop = obj.offsetTop;
			let speed = obj.speed;

			// check visibility first and update the object property
			obj.visible = Parallax.prototype.visible(component);
			
			if (obj.visible) {
				item.style.transform = 'translate3d(0,'+ Parallax.prototype.calcul(offsetTop, parseInt(speed)) +'px, 0)';
			}
		}
	}
}

Parallax.prototype.visible = function(element) {
	return currentlyVisible(element)
}

Parallax.prototype.calcul = function(offsetTop, speed) {
	return parseInt(( 0 + ( ((scrolled_y - offsetTop) / speed) )));
}

Parallax.prototype.init = function(index) {
	let p = ParallaxItems[index];

	let item = p.item;
	let offsetTop = p.offsetTop;
	let speed = p.speed;

	item.style.transform = 'translate3d(0,'+ Parallax.prototype.calcul(offsetTop, speed) +'px, 0)';

	Parallax.prototype.watch();
}


// Prototype END
// **---------------------------------------------------**
// -------------------------------------------------------
/*
*** Available prototype
*
* Parallax.prototype.init();
*
** i: item index
*
* Parallax.prototype.watch();
* Parallax.prototype.update(i)
* Parallax.prototype.updateAll()
* Parallax.prototype.reset()
*/


/*
* @TODO
* - Prototype add/remove single element
* - Prévoir une facon de rapide d'enlever la dépendance à la custom scrollbar.
*	Présentement on dépend de la function currentlyVisible() pour vérifier
*	si un element est visible à l'écran. Il suffirait de faire une function qui
*	pourrait dépendre de notre scrollcontent.js déja existant si on a pas la
*	custom scrollbar
*/