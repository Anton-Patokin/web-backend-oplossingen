(function(){
    var base = angular.module("base",[]);
    
    base.controller('StoreController',function(){
        this.product = gem;
    });
    var gem ={
        name: "dodecahedron",
        price: 2.95,
        description :'. . .',
        canPurchase: false,
    }
}());



/*
<div ng-repeat="product in sotre.products"></div>
<button ng-show="product.canPurchase"></button>

filters:
{{product.price | currency}}
{{product.price | uppercase}}
{{product.price | limtTo:8}}
ng-repeat="product in store.products | orderby:'-price'"



product.image[0].full
ng-src="{{product.image[0].full}}"

<section ng-init="tab=1"   ng-controller="panelController as panel">
<ul>
    <li ng-class="{active:taba===1}"  or ng-class="{panel.isSelected(1)}">
        <a href ng-click="tab=1" or ng-click="panel.selectab(1)"></a>
 </section >
 
 
 
 
 app.controller("panelController", function(){
 
    this.tab =1;
    this.selectTab = function(settab){
        this.tab = setTab;
    }
    this.isSelected = function(checkTab){
        return this.tab === checkTab;
    }
 })
*/