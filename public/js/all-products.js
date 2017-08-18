/**
 * Created by sobhaneskandari on 7/25/17.
 */

$('#select-state').selectize({
    maxItems: 5
});

function getTree() {
    // Some logic to retrieve, or generate tree structure
    var defaultData = [
        {
            text: 'کالای دیجیتال',
            href: '#parent1',
            tags: ['4'],
            nodes: [
                {
                    text: 'موبایل',
                    href: '#child1',
                    tags: ['2'],
                },
                {
                    text: 'لپ تاپ',
                    href: '#child2',
                    tags: ['0']
                }
            ]
        },
        {
            text: 'خوراک',
            href: '#parent2',
            tags: ['0']
        },
        {
            text: 'لوازم خانگی',
            href: '#parent3',
            tags: ['0']
        },
        {
            text: 'زیبایی سلامت',
            href: '#parent4',
            tags: ['0']
        },
        {
            text: 'فرهنگ و هنر',
            href: '#parent5'  ,
            tags: ['0']
        }
    ];

    return defaultData;
}

var $checkableTree = $('#treeview-checkable').treeview({
    data: getTree(),
    showIcon: false,
    showCheckbox: true,
    expandIcon: 'fa fa-chevron-left ml-2',
    collapseIcon: 'fa fa-chevron-down ml-2',
    onNodeChecked: function(event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
    },
    onNodeUnchecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
    }
});
//
// var findCheckableNodess = function() {
//     return $checkableTree.treeview('search', [ $('#input-check-node').val(), { ignoreCase: false, exactMatch: false } ]);
// };
// var checkableNodes = findCheckableNodess();

// // Check/uncheck/toggle nodes
// $('#input-check-node').on('keyup', function (e) {
//     checkableNodes = findCheckableNodess();
//     $('.check-node').prop('disabled', !(checkableNodes.length >= 1));
// });
// $('#btn-check-node.check-node').on('click', function (e) {
//     $checkableTree.treeview('checkNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
// });
//
// $('#btn-uncheck-node.check-node').on('click', function (e) {
//     $checkableTree.treeview('uncheckNode', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
// });
//
// $('#btn-toggle-checked.check-node').on('click', function (e) {
//     $checkableTree.treeview('toggleNodeChecked', [ checkableNodes, { silent: $('#chk-check-silent').is(':checked') }]);
// });


var openedCategory = true;
$(".categories_dropdownBtn").css('cursor','pointer');
$(".categories_dropdownBtn").on('click',function () {
    if(openedCategory){
        openedCategory = false;
        $("#treeview-checkable").slideUp();
        $(".categories_dropdownBtn i").css({'transform' : 'rotate('+ 90 +'deg)'});
    }else{
        openedCategory = true;
        $("#treeview-checkable").slideDown();
        $(".categories_dropdownBtn i").css({'transform' : 'rotate('+ 360 +'deg)'});
    }

});

// {{--============[ Stores Page ]===========--}}

// {{--============[ Provinces Filter ]===========--}}
function getProvincesTree() {
    // Some logic to retrieve, or generate tree structure
    var defaultData = [
        {
            text: 'گیلان',
            href: '#parent1',
            tags: ['4'],
        }
    ];

    return defaultData;
}
var $checkableTree = $('#treeview-provinces').treeview({
    data: getProvincesTree(),
    showIcon: false,
    showCheckbox: true,
    expandIcon: 'fa fa-chevron-left ml-2',
    collapseIcon: 'fa fa-chevron-down ml-2',
    onNodeChecked: function(event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
    },
    onNodeUnchecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
    }
});

// {{--============[ Citites Filter ]===========--}}
function getCititesTree() {
    // Some logic to retrieve, or generate tree structure
    var defaultData = [
        {
            text: 'رشت',
            href: '#parent1',
            tags: ['4'],
        },
        {
            text: 'بندرانزلی',
            href: '#parent1',
            tags: ['0'],
        }
    ];

    return defaultData;
}
var $checkableTree = $('#treeview-cities').treeview({
    data: getCititesTree(),
    showIcon: false,
    showCheckbox: true,
    expandIcon: 'fa fa-chevron-left ml-2',
    collapseIcon: 'fa fa-chevron-down ml-2',
    onNodeChecked: function(event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
    },
    onNodeUnchecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
    }
});

// {{--============[ Stores Filter ]===========--}}
function getStoresKindTree() {
    // Some logic to retrieve, or generate tree structure
    var defaultData = [
        {
            text: 'کالای دیجیتال',
            href: '#parent1',
            tags: ['4'],
        },
        {
            text: 'خوراک',
            href: '#parent2',
            tags: ['0']
        },
        {
            text: 'لوازم خانگی',
            href: '#parent3',
            tags: ['0']
        },
        {
            text: 'زیبایی سلامت',
            href: '#parent4',
            tags: ['0']
        },
        {
            text: 'فرهنگ و هنر',
            href: '#parent5'  ,
            tags: ['0']
        }
    ];

    return defaultData;
}
var $checkableTree = $('#treeview-stores').treeview({
    data: getStoresKindTree(),
    showIcon: false,
    showCheckbox: true,
    expandIcon: 'fa fa-chevron-left ml-2',
    collapseIcon: 'fa fa-chevron-down ml-2',
    onNodeChecked: function(event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
    },
    onNodeUnchecked: function (event, node) {
        $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
    }
});


var openedStores = true;
$(".stores_dropdownBtn").css('cursor','pointer');
$(".stores_dropdownBtn").on('click',function () {
    if(openedStores){
        openedStores = false;
        $("#treeview-stores").slideUp();
        $(".stores_dropdownBtn i").css({'transform' : 'rotate('+ 90 +'deg)'});
    }else{
        openedStores = true;
        $("#treeview-stores").slideDown();
        $(".stores_dropdownBtn i").css({'transform' : 'rotate('+ 360 +'deg)'});
    }

});

var openedProvince = true;
$(".provinces_dropdownBtn").css('cursor','pointer');
$(".provinces_dropdownBtn").on('click',function () {
    if(openedProvince){
        openedProvince = false;
        $("#treeview-provinces").slideUp();
        $(".provinces_dropdownBtn i").css({'transform' : 'rotate('+ 90 +'deg)'});
    }else{
        openedProvince = true;
        $("#treeview-provinces").slideDown();
        $(".provinces_dropdownBtn i").css({'transform' : 'rotate('+ 360 +'deg)'});
    }

});

var openedCity = true;
$(".cities_dropdownBtn").css('cursor','pointer');
$(".cities_dropdownBtn").on('click',function () {
    if(openedCity){
        openedCity = false;
        $("#treeview-cities").slideUp();
        $(".cities_dropdownBtn i").css({'transform' : 'rotate('+ 90 +'deg)'});
    }else{
        openedCity = true;
        $("#treeview-cities").slideDown();
        $(".cities_dropdownBtn i").css({'transform' : 'rotate('+ 360 +'deg)'});
    }

});

// <!------------ Cost Slider ------------------>
var slider = document.getElementById('cost-slider');

noUiSlider.create(slider, {
    start: [50000, 5000000],
    step: 50000,
    connect: true,
    direction: 'rtl',
    tooltips: true,
    range: {
        'min': 50000,
        'max': 5000000
    },
    format: wNumb({
        decimals: 0,
        thousand: ',',
        postfix: ' تومان',
    })

});


// ============[ Translate English digits to farsi ]===========
var translate = function (englishNumber) {
    var chars = englishNumber.split('');
    var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    for (var i = 0; i < chars.length; i++) {
        if (/\d/.test(chars[i])) {
            chars[i] = arabicNumbers[chars[i]];
        }
    }
    return chars.join('');
};

