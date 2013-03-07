/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};


var resources = [
];
var symbols = {
"stage": {
   version: "1.0.0",
   minimumCompatibleVersion: "0.1.7",
   build: "1.0.1.204",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'home-bg',
            type:'image',
            rect:['0','0','1100px','800px','auto','auto'],
            fill:["rgba(0,0,0,0)",im+"home-bg.png",'0px','0px']
         },
         {
            id:'Sedona_Amenities',
            type:'image',
            rect:['121px','264px','179px','173px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Amenities.png",'0px','0px']
         },
         {
            id:'Sedona_Contact',
            type:'image',
            rect:['579px','422px','233px','381px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Contact.png",'0px','0px']
         },
         {
            id:'Sedona_Eco-Centric',
            type:'image',
            rect:['39px','621px','166px','60px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Eco-Centric.png",'0px','0px']
         },
         {
            id:'Text',
            type:'text',
            rect:['936px','47px','auto','auto','auto','auto'],
            cursor:['pointer'],
            text:"RESIDENT LOGIN",
            font:['Arial, Helvetica, sans-serif',10,"rgba(0,0,0,1)","600","none",""],
            transform:[[],[],[],['0.98','0.98']]
         },
         {
            id:'facebook',
            type:'image',
            rect:['1004px','25px','17px','17px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"facebook.png",'0px','0px']
         },
         {
            id:'twitter',
            type:'image',
            rect:['975px','25px','17px','17px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"twitter.png",'0px','0px']
         },
         {
            id:'Sedona_FloorPlans',
            type:'image',
            rect:['629px','279px','166px','60px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_FloorPlans.png",'0px','0px']
         },
         {
            id:'Sedona_Gallery',
            type:'image',
            rect:['828px','320px','140px','229px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Gallery.png",'0px','0px']
         },
         {
            id:'Sedona_Neighborhood',
            type:'image',
            rect:['300px','509px','175px','156px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Neighborhood.png",'0px','0px']
         },
         {
            id:'Sedona_Residences',
            type:'image',
            rect:['420px','194px','137px','234px','auto','auto'],
            cursor:['pointer'],
            fill:["rgba(0,0,0,0)",im+"Sedona_Residences.png",'0px','0px']
         },
         {
            id:'Text2',
            type:'text',
            rect:['23px','761px','auto','auto','auto','auto'],
            text:"PRIVACY POLICY",
            align:"left",
            font:['Arial, Helvetica, sans-serif',10,"rgba(255,255,255,1.00)","600","none","normal"]
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_Sedona_Neighborhood}": [
            ["style", "top", '509.3px'],
            ["style", "left", '300.02px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Sedona_Amenities}": [
            ["style", "top", '264px'],
            ["style", "left", '121px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Sedona_Gallery}": [
            ["style", "top", '319.55px'],
            ["style", "left", '828.46px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Sedona_Contact}": [
            ["style", "top", '422.22px'],
            ["style", "left", '578.8px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Sedona_FloorPlans}": [
            ["style", "top", '279px'],
            ["style", "left", '628.66px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Sedona_Residences}": [
            ["style", "top", '194.39px'],
            ["style", "left", '420.34px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Text}": [
            ["style", "top", '47px'],
            ["transform", "scaleY", '0.98'],
            ["style", "cursor", 'pointer'],
            ["transform", "scaleX", '0.98'],
            ["style", "font-weight", '600'],
            ["style", "left", '936px'],
            ["style", "font-size", '10px']
         ],
         "${_Sedona_Eco-Centric}": [
            ["style", "top", '620.59px'],
            ["style", "left", '39.1px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '1100px'],
            ["style", "height", '800px'],
            ["style", "overflow", 'hidden']
         ],
         "${_twitter}": [
            ["style", "top", '25px'],
            ["style", "left", '974.95px'],
            ["style", "cursor", 'pointer']
         ],
         "${_facebook}": [
            ["style", "top", '25.47px'],
            ["style", "left", '1004px'],
            ["style", "cursor", 'pointer']
         ],
         "${_Text2}": [
            ["color", "color", 'rgba(255,255,255,1.00)'],
            ["style", "left", '23px'],
            ["style", "top", '761px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 0,
         autoPlay: true,
         timeline: [
         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "Sedona-home-animation");
