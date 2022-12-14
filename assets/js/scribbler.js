// utilities
var get = function (selector, scope) {
  scope = scope ? scope : document;
  return scope.querySelector(selector);
};

var getAll = function (selector, scope) {
  scope = scope ? scope : document;
  return scope.querySelectorAll(selector);
};

// setup typewriter effect in the terminal demo
if (document.getElementsByClassName('home').length > 0) {
  var i = 0;
  var txt = `Creating FiveM Scripts & Addons

          Products:
            - VD-Drugs [QB] ~ $25 USD
            - VD-MoneyLaundering [QB] ~ $15 USD
            - *WIP* VD-BarJob [QB] (Coming Soon)
            - *WIP* VD-CoffeeShopJob [QB] (Coming Soon)
            - *WIP* VD-RestaurantJob [QB] (Coming Soon)
            - *WIP* VD-FastFoodJob [QB] (Coming Soon)`;
  var speed = 10;

  function typeItOut () {
    if (i < txt.length) {
      document.getElementsByClassName('home')[0].innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeItOut, speed);
    }
  }

  setTimeout(typeItOut, 1800);
}

if (document.getElementsByClassName('vd-drugs').length > 0) {
  var i = 0;
  var txt = `VD-Drugs

          Price:
            ~ $25 USD

          Features:
            ~ Meth Production
            ~ Cocaine Production
            ~ Weed Production
            ~ Counterfeit Cash Production
            ~ Corner Holding (Dealing)

          Dependencies:
            ~ bob74_ipl
            ~ QB-Core
            ~ QB-Inventory

          Optional:
            ~ QB-Drugs`;
  var speed = 10;

  function typeItOut () {
    if (i < txt.length) {
      document.getElementsByClassName('vd-drugs')[0].innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeItOut, speed);
    }
  }

  setTimeout(typeItOut, 1800);
}

if (document.getElementsByClassName('vd-moneylaundering').length > 0) {
  var i = 0;
  var txt = `VD-MoneyLaundering

          Price:
            ~ $15 USD

          Features:
            ~ Adds laundromat locations
            ~ takes marked bills and cleans them with an interactive process

          Dependencies:
            ~ QB-Core
            ~ Interact-Sound`;
  var speed = 10;

  function typeItOut () {
    if (i < txt.length) {
      document.getElementsByClassName('vd-moneylaundering')[0].innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeItOut, speed);
    }
  }

  setTimeout(typeItOut, 1800);
}

// toggle tabs on codeblock
window.addEventListener("load", function() {
  // get all tab_containers in the document
  var tabContainers = getAll(".tab__container");

  // bind click event to each tab container
  for (var i = 0; i < tabContainers.length; i++) {
    get('.tab__menu', tabContainers[i]).addEventListener("click", tabClick);
  }

  // each click event is scoped to the tab_container
  function tabClick (event) {
    var scope = event.currentTarget.parentNode;
    var clickedTab = event.target;
    var tabs = getAll('.tab', scope);
    var panes = getAll('.tab__pane', scope);
    var activePane = get(`.${clickedTab.getAttribute('data-tab')}`, scope);

    // remove all active tab classes
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active');
    }

    // remove all active pane classes
    for (var i = 0; i < panes.length; i++) {
      panes[i].classList.remove('active');
    }

    // apply active classes on desired tab and pane
    clickedTab.classList.add('active');
    activePane.classList.add('active');
  }
});

//in page scrolling for documentaiton page
var btns = getAll('.js-btn');
var sections = getAll('.js-section');

function setActiveLink(event) {
  // remove all active tab classes
  for (var i = 0; i < btns.length; i++) {
    btns[i].classList.remove('selected');
  }

  event.target.classList.add('selected');
}

function smoothScrollTo(i, event) {
  var element = sections[i];
  setActiveLink(event);

  window.scrollTo({
    'behavior': 'smooth',
    'top': element.offsetTop - 20,
    'left': 0
  });
}

if (btns.length && sections.length > 0) {
  for (var i = 0; i<btns.length; i++) {
    btns[i].addEventListener('click', smoothScrollTo.bind(this,i));
  }
}

// fix menu to page-top once user starts scrolling
window.addEventListener('scroll', function () {
  var docNav = get('.doc__nav > ul');

  if( docNav) {
    if (window.pageYOffset > 63) {
      docNav.classList.add('fixed');
    } else {
      docNav.classList.remove('fixed');
    }
  }
});

// responsive navigation
var topNav = get('.menu');
var icon = get('.toggle');

window.addEventListener('load', function(){
  function showNav() {
    if (topNav.className === 'menu') {
      topNav.className += ' responsive';
      icon.className += ' open';
    } else {
      topNav.className = 'menu';
      icon.classList.remove('open');
    }
  }
  icon.addEventListener('click', showNav);
});
