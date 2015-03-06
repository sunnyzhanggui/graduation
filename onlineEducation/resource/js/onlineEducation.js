function addCollection(userId,courseId){
    alert("请先登陆");
    if(userId){
        var url = "/action/action.php?action=addCollection";
        url = url + "&userId=" + userId + "&courseId=" + courseId;
        document.location.href = url;
    }else{
        alert("请先登陆");
    }
}