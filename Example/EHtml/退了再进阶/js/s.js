define([  //定义以来模块
    './math.js'
], function(m1) {
    function circle(r){
        return m1.multiple(m1.PI,m1.square(r))
    }
    return{s_circle:circle}
    
});