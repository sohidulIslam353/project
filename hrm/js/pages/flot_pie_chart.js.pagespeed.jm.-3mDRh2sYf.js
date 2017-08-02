"use strict";$(document).ready(function(){var data=[],series=Math.floor(Math.random()*4)+2;for(var i=0;i<series;i++){data[i]={label:"Series"+(i+1),data:Math.floor(Math.random()*100)}}function labelFormatter(label,series){return"<div style='font-size:12pt; text-align:center; padding:2px; color:#fff;'>"+label+"<br/>"+Math.round(series.percent)+"%</div>";}$.plot('#pie_chart1',data,{series:{pie:{show:true}},colors:['#329cff','#5aca82','#007bb8','#fcb410','#f86a67','#31d0d6','#937eff']});$.plot('#pie_chart2',data,{series:{pie:{show:true}},legend:{show:false},colors:['#937eff','#31d0d6','#f86a67','#fcb410','#007bb8','#5aca82','#329cff']});$.plot('#pie_chart3',data,{series:{pie:{show:true,radius:1,label:{show:true,radius:1,formatter:labelFormatter,background:{opacity:0.8}}}},legend:{show:false},colors:['#fcb410','#f86a67','#31d0d6','#937eff','#329cff','#5aca82','#007bb8']});$.plot('#pie_chart4',data,{series:{pie:{show:true,radius:1,label:{show:true,radius:3/4,formatter:labelFormatter}}},legend:{show:false},colors:['#5aca82','#007bb8','#fcb410','#f86a67','#31d0d6','#937eff','#329cff']});$.plot('#pie_chart5',data,{series:{pie:{show:true,radius:3/4,label:{show:true,radius:3/4,formatter:labelFormatter,background:{opacity:0.5,color:'#333'}}}},legend:{show:false},colors:['#f86a67','#31d0d6','#937eff','#5aca82','#007bb8','#fcb410','#329cff']});$.plot('#pie_chart6',data,{series:{pie:{show:true,radius:1,label:{show:true,radius:2/3,formatter:labelFormatter,threshold:0.1}}},legend:{show:false},colors:['#007bb8','#fcb410','#31d0d6','#937eff','#329cff','#5aca82','#f86a67']});$.plot('#pie_chart7',data,{series:{pie:{show:true,combine:{color:'#999',threshold:0.1}}},legend:{show:false},colors:['#329cff','#5aca82','#f86a67','#007bb8','#fcb410','#31d0d6','#937eff']});$.plot('#pie_chart8',data,{series:{pie:{show:true,radius:500,label:{show:true,formatter:labelFormatter,threshold:0.1}}},legend:{show:false},colors:['#007bb8','#fcb410','#31d0d6','#329cff','#5aca82','#f86a67','#937eff','#5aca82']});$.plot('#pie_chart9',data,{series:{pie:{show:true,radius:1,tilt:0.5,label:{show:true,radius:1,formatter:labelFormatter,background:{opacity:0.8}},combine:{color:'#999',threshold:0.1}}},legend:{show:false},colors:['#31d0d6','#329cff','#5aca82','#007bb8','#fcb410','#f86a67','#937eff']});$.plot('#pie_chart10',data,{series:{pie:{innerRadius:0.5,show:true}},colors:['#fcb410','#f86a67','#937eff','#31d0d6','#329cff','#5aca82','#007bb8']});});