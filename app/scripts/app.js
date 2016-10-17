'use strict';

angular.module('omgApp', [])

        .controller('gearController', ['$scope', function($scope) {
            
            $scope.tab = 1;
            $scope.filtText = '';
            $scope.showDetails = false;

            $scope.histories=[
                                          {
                                              itemName:'Black Diamond Camalot C4 Package',
                                              image:'images/camalot.jpg',
                                              state:'Rent',
                                              category:'climbing',
                                              price:'10',
                                              date:'',
                                              description:'Incredible expansion range and low weight make the Black Diamond Camalot C4 Package a perfect way to start off any trad rack or beef up an old one. These five cams (size 0.5-3) cover all the bases from fingers to fists.',
                                              comment:''
                                          },
                                          {
                                              itemName:'Climing shoe',
                                              image:'images/climingshoe.jpeg',
                                              state:'Rent',
                                              category:'climbing',
                                              price:'7',
                                              date:'',
                                              description:'The Men Skwama Climbing Shoe is La Sportiva high-performance slipper for competition bouldering and technical sport climbing. P3 technology applies a Permanent Power Platform that ensures the Skwama downturn stays downturned.',
                                              comment:''
                                          },
                                          {
                                              itemName:'Icelantic Pioneer 109 Ski',
                                              image:'images/ski.jpg',
                                              state:'Leased',
                                              category:'ski',
                                              price:'10',
                                              date:'',
                                              description:'Whether you are looking to diversify your quicker with a well-rounded pair of skis between your big powder boards and skinny groomer sticks or seeking the elusive quiver-of-one ski, the Icelantic Pioneer 109 Ski will most definitely fit the bill.',
                                              comment:''
                                          }
                                          ];
        
                        
            $scope.select = function(setTab) {
                $scope.tab = setTab;
                if (setTab===1){
                    $scope.filtText = '';
                }
                else if (setTab === 2) {
                    $scope.filtText = "climing";
                }
                else if (setTab === 3) {
                    $scope.filtText = "ski";
                }
                else if (setTab === 4) {
                    $scope.filtText = "bicycling";
                }
                else {
                    $scope.filtText = "other";
                }
            };

            $scope.isSelected = function (checkTab) {
                return ($scope.tab === checkTab);
            };
    
            $scope.toggleDetails = function() {
                $scope.showDetails = !$scope.showDetails;
            };
        }])
;
/*        .controller('ContactController', ['$scope', function($scope) {

            $scope.feedback = {mychannel:"", firstName:"", lastName:"", agree:false, email:"" };
            
            var channels = [{value:"tel", label:"Tel."}, {value:"Email",label:"Email"}];
            
            $scope.channels = channels;
            $scope.invalidChannelSelection = false;
                        
        }])

        .controller('FeedbackController', ['$scope', function($scope) {
            
            $scope.sendFeedback = function() {
                
                console.log($scope.feedback);
                
                if ($scope.feedback.agree && ($scope.feedback.mychannel == "")) {
                    $scope.invalidChannelSelection = true;
                    console.log('incorrect');
                }
                else {
                    $scope.invalidChannelSelection = false;
                    $scope.feedback = {mychannel:"", firstName:"", lastName:"", agree:false, email:"" };
                    $scope.feedback.mychannel="";
                    $scope.feedbackForm.$setPristine();
                    console.log($scope.feedback);
                }
            };
        }])

        .controller('DishDetailController', ['$scope', function($scope) {

            var dish={
                          name:'Uthapizza',
                          image: 'images/uthapizza.png',
                          category: 'mains', 
                          label:'Hot',
                          price:'4.99',
                          description:'A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.',
                           comments: [
                               {
                                   rating:5,
                                   comment:"Imagine all the eatables, living in conFusion!",
                                   author:"John Lemon",
                                   date:"2012-10-16T17:57:28.556094Z"
                               },
                               {
                                   rating:4,
                                   comment:"Sends anyone to heaven, I wish I could get my mother-in-law to eat it!",
                                   author:"Paul McVites",
                                   date:"2014-09-05T17:57:28.556094Z"
                               },
                               {
                                   rating:3,
                                   comment:"Eat it, just eat it!",
                                   author:"Michael Jaikishan",
                                   date:"2015-02-13T17:57:28.556094Z"
                               },
                               {
                                   rating:4,
                                   comment:"Ultimate, Reaching for the stars!",
                                   author:"Ringo Starry",
                                   date:"2013-12-02T17:57:28.556094Z"
                               },
                               {
                                   rating:2,
                                   comment:"It's your birthday, we're gonna party!",
                                   author:"25 Cent",
                                   date:"2011-12-02T17:57:28.556094Z"
                               }
                               
                           ]
                    };
            
            $scope.dish = dish;
            
        }])

        .controller('DishCommentController', ['$scope', function($scope) {
            
            //Step 1: Create a JavaScript object to hold the comment from the form
            $scope.newComment = {author:"", rating:5, comment:"", date:" "};
 
            $scope.submitComment = function () {
                
                //Step 2: This is how you record the date
                $scope.newComment.date = new Date().toISOString();;
                
                // Step 3: Push your comment into the dish's comment array
                $scope.dish.comments.push($scope.newComment);
                
                //Step 4: reset your form to pristine
                $scope.commentForm.$setPristine();
                
                //Step 5: reset your JavaScript object that holds your comment
                $scope.newComment = {author:"", rating:5, comment:"", date:""};

            }
        }])

;
*/