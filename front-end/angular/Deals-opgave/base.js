(function(){
    var deals = angular.module("deals",[]);
    //console.log(jsonDeals);
    deals.controller('DealsController',function($scope){
        this.deals = jsonDeals.results.collection1;
        $scope.getCity =function(){
            console.log(this.deal.Land);
        }
        
       
    });
    
    
    /*
    app.controller("PanelController",function(){
        
        this.setDeal = function(){};
        
         console.log(this.setDeal);
    });
    */
    console.log(jsonDeals.results.collection1)
}());