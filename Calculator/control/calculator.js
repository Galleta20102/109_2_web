const priority = (el) => {
    if (el === '+' || el === '-') {
        return 1;
    }
    if (el === 'x' || el === '/') {
        return 2;
    }
    return 0;
};

const operator = (last, penultimate,opt) => {
    switch (opt) {
        case '+':
           return (penultimate + last).toString();
        case '-':
            return (penultimate - last).toString();
        case 'x':
            return (penultimate * last).toString();
        case '/':
            return (penultimate / last).toString();
        default:
            break;
    }
}

function calculate(infix){
    const stackNum = new Stack();
    const stackOpt = new Stack();
    var indexNum = 0, indexOpt=0;
    const result=0;
    infix.forEach(e => {
        if("+-x/".indexOf(e) == -1){
            stackNum.push(e);
            indexNum++;
        }
        else{
            if(!stackOpt.isEmpty() && priority(e)<=priority(stackOpt.peek())){
                const last = Number(stackNum.pop());
                const penultimate = Number(stackNum.pop());
                opt = stackOpt.pop();
                if(opt == "/" && penultimate == 0){
                    throw BreakException;
                }
                stackNum.push(operator(last,penultimate,opt));
                indexNum--;
                if(priority(e)!=0){
                    stackOpt.push(e);
                }
            }
            else{
                stackOpt.push(e);
                indexOpt++;
            }
        }
    });
    for(var i=0;i<indexOpt;i++){
        const last = Number(stackNum.pop());
        const penultimate = Number(stackNum.pop());
        opt = stackOpt.pop();
        if(opt == "/" && penultimate == 0){
            throw BreakException;
        }
        stackNum.push(operator(last,penultimate,opt));
    }
    $("#ansBar").text(Number(stackNum.peek()));
}



var str = "1 + 2 x 3 - 4.1";
var input = "";
$(".number,.operator").click(function(e){
    if($(this).attr("class") == "btn operator"){
        input = input + " " + $(this).val().toString() + " ";
    }
    else{
        input += $(this).val().toString();
    }
    $("#ansBar").text(input);
})
$('[value="C"]').click(function(e){
    $("#ansBar").text("　");
    input="";
})
$('[value="="]').click(function(e){
    calculate($("#ansBar").text().split(" "));
})
$('[value="←"]').click(function(e){
    var tmpInput = "";
    var len;
    if(input[input.length-1]==' '){
        len = input.length-3;
    }
    else{
        len = input.length-1;
    }
    for(var i=0;i<len;i++){
        tmpInput += input[i];
    }
    input = tmpInput;
    $("#ansBar").text(input);
})