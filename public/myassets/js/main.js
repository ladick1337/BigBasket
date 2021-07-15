var $document = $(document);
/*$document.ready(function() {
    /!** AOS INIT **!/
    AOS.init();
    /!** AOS INIT **!/
});*/

$document.on('click', '.js-toggle', function () {
    event.preventDefault();
    var toggleButton = $(this);
    var nav = $('.js-nav-mobile');

    toggleButton.toggleClass('header-mobile__toggle--on');

    if (toggleButton.hasClass('header-mobile__toggle--on')){
        nav.slideDown();
    } else{ nav.slideUp();}
});

// Выпадающая на странице мой адрес страница
$document.on('click', '.tabs__nav', function () {
    event.preventDefault();
    var toggleButton = $(this);

    toggleButton.toggleClass('active-before');
});

// подкатегории
$document.on('click', '.js-toggle-aside-menu', function() {
    var toggleTitle = $(this);
    var nav = $('.js-nav-aside');

    toggleTitle.toggleClass('open');

    if (toggleTitle.hasClass('open')){
        nav.slideDown(); } else{ nav.slideUp();}
});





var someDiv = $('#xss1');

someDiv.on('click', function() {
  someDiv.toggleClass('active');
});



$document.on('click', '.js-toggle-footer-menu', function() {
    $(this).parent('.footer-coll').toggleClass('footer-coll--active');
});
$document.on('click', '.aside-filter__title', function() {
    $(this).parent('.aside-filter').toggleClass('second-filter-active');
});
$document.on('click', '.xss', function() {
    $(this).parent('.second-filter').toggleClass('second-filter-active');
});
$document.on('click', '.mobile', function() {
    $(this).parent('tr').toggleClass('active');
});

$document.on('click', '.for-m', function() {
    $(this).parent('.flex').toggleClass('active');
});

$document.on('click', '.js-text-height', function(e) {
    e.preventDefault();
    var button = $(this);
    var textBlock = button.parent('.text-container');

    textBlock.toggleClass('text-container--active');
    if (textBlock.hasClass('text-container--active')){
        button.html('Свернуть');
    } else {
        button.html('Развернуть');
    }
});

$document.on('click', '.js-question-toggle', function () {
    event.preventDefault();
    var toggleQ = $(this);
    var qBlock = toggleQ.parent('.question');
    qBlock.toggleClass('question--show');

});


// Скрипт модального окна
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close1")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn2");
var span2 = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}



var getaddressUSA = document.getElementsByClassName('getaddressUSA')[0];
getaddressUSA.onclick = function() {
    modal2.style.display = "block";
}
















var $tabs = function (target) {
    var
      _elemTabs = (typeof target === 'string' ? document.querySelector(target) : target),
      _eventTabsShow,
      _showTab = function (tabsLinkTarget) {
        var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
        tabsPaneTarget = document.querySelector(tabsLinkTarget.getAttribute('href'));
        tabsLinkActive = tabsLinkTarget.parentElement.querySelector('.tabs__link_active');
        tabsPaneShow = tabsPaneTarget.parentElement.querySelector('.tabs__pane_show');
        // если следующая вкладка равна активной, то завершаем работу
        if (tabsLinkTarget === tabsLinkActive) {
          return;
        }
        // удаляем классы у текущих активных элементов
        if (tabsLinkActive !== null) {
          tabsLinkActive.classList.remove('tabs__link_active');
        }
        if (tabsPaneShow !== null) {
          tabsPaneShow.classList.remove('tabs__pane_show');
        }
        // добавляем классы к элементам (в завимости от выбранной вкладки)
        tabsLinkTarget.classList.add('tabs__link_active');
        tabsPaneTarget.classList.add('tabs__pane_show');
        document.dispatchEvent(_eventTabsShow);
      },
      _switchTabTo = function (tabsLinkIndex) {
        var tabsLinks = _elemTabs.querySelectorAll('.tabs__link');
        if (tabsLinks.length > 0) {
          if (tabsLinkIndex > tabsLinks.length) {
            tabsLinkIndex = tabsLinks.length;
          } else if (tabsLinkIndex < 1) {
            tabsLinkIndex = 1;
          }
          _showTab(tabsLinks[tabsLinkIndex - 1]);
        }
      };

    _eventTabsShow = new CustomEvent('tab.show', { detail: _elemTabs });

    _elemTabs.addEventListener('click', function (e) {
      var tabsLinkTarget = e.target;
      // завершаем выполнение функции, если кликнули не по ссылке
      if (!tabsLinkTarget.classList.contains('tabs__link')) {
        return;
      }
      // отменяем стандартное действие
      e.preventDefault();
      _showTab(tabsLinkTarget);
    });

    return {
      showTab: function (target) {
        _showTab(target);
      },
      switchTabTo: function (index) {
        _switchTabTo(index);
      }
    }

  };

  $tabs('.tabs');






// $document.on('click', '#xss1', function() {
//     $('#xxss1').toggleClass('footer-coll--active');
// });

 // $(document).ready(function(){
 //  $('#xss1').click(function () {
 //    $(this).toggleClass('click');
 //    });
 //  });

// $document.on('click', '.sub_filter_title', function() {
//     $(this).parent('.second-filter').toggleClass('second-filter-active');
// });


$(document).ready(function(){
  $('.xss').on('click', function(){
    $(this).parent('.second-filter').toggleClass('simple_left_block');
    console.log($(this).parent().attr('class'));
  });
});

