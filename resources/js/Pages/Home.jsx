export default function Home() {
    // Entrada "aaaabbbcca";

    //Salida (("a", 4), ("b", 3), ('c", 2), ("a, 1)]
    function arrayFormat(input) {
        let array = [], count = 1;
        for (let index = 0; index < input.length; index++) {
            const element = input[index];
            if (input[(index + 1)] === element) {
                count += 1;
            } else {
                array.push([element, count]);
                count = 1;
            }
        }
        console.log(array);
        const specialFormat = array.map(([element, count]) => `("${element}", ${count})`).join(", ");
        const specialFormat2 = "(" + array.map(([element, count]) => `("${element}", ${count})`).join(", ")+"]";
        return specialFormat2 ;

    }
    
    return (
        <div>
            <h1>Holavfddddddddd</h1>
            <br />
        </div>
    
    )
}