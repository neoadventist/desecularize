app.controller('main', function ($scope, $timeout,$http,$filter) {
	
	var language = window.navigator.userLanguage || window.navigator.language;
	var browswer = navigator.appName;
	var date = $filter('date')(new Date(), 'M/d/yy h:mm:ss a');
	$scope.data = {email:"",name:"",lang:language,browser:browswer,dateTime:date};
	$scope.site = {}; 
	$scope.site.benefits='<ul>	<li>Hide all of the secular material on your Facebook/Twitter Feeds</li>	<li>Cut through the noise to see what is important in life</li>	<li>See only religious material, perfect for Sabbath</li>	<li>Teach Facebook to show you content that is important to you</li> <li>Discover status updates from old friends</li>	</ul>';
	$scope.site.description = "deSECULARIZE your Facebook and Twitter feeds to let you focus on what really matters...your relationship with Jesus Christ and the Salvation of others.";

	$scope.site.r=false;
	$scope.requestshow=true;
	$scope.process = function (){
	var errormsg = "Hmm, something went wrong, please check your internet connection or your email and try again!";
		$http({
			url: "send.php",
			method: "POST",
			data: $scope.data
		}).success(function(DATA, status, headers, config) {
			if(DATA){
				$scope.status = "We Received your request! You Will be sent a link to download the app when it becomes avaliable. It is currently only avaliable for Chrome and Firefox. Thank You!";
				$scope.requestshow=false;
			}else{
				$scope.status = errormsg;
			}
		}).error(function(DATA, status, headers, config) {
			$scope.status = errormsg;
		});	
	}
	console.log($scope);
});
