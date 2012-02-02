

urls = new Array['http://0.tqn.com/d/accessories/1/0/A/H/-/-/katherine-heigl-peoples-choice.jpg',
                 'http://development.noblewebservices.com/lawn/wp-content/uploads/2011/02/people.jpg',
                 'http://www.maketunes.com/system/files/images/people-out-persp.gif',
                 'http://www.trainingzone.co.uk/files/siftmedia-trainingzone/images/Business_people_5.preview.jpg',
                 'http://i.zdnet.com/blogs/young-people_tcm15-12493.jpg'];

function previous()
{
	alert("<<");
	
}
function next()
{
	alert(">>");
}
function alertMe()
{
	alert();
}
function test()
{
	var n = document.getElementById("mainPic");
	n.style.width = "10px";
	//alert();
	alert(window.getComputedStyle(n, null).width);
}