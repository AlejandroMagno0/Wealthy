import React, { createContext, useContext, useState } from 'react';
import Navbar from '@/Components/Navbar';
import Product from '@/Components/Product';
import CartPage from '@/Components/CartPage';
import { CartContext } from '@/Context/Cart';
const ThemeContext = createContext("light");
export default function Index({dishes}) {

    function ThemeComponent() {
        const theme = useContext(ThemeContext);
        return  <div>El tema actual es: {theme}</div>
    }
    const { cart, addCart, deleteCart } = useContext(CartContext);
    const [count, setCount] = useState(0);
    return (
        <ThemeContext.Provider value='dark'>
            <Navbar />
            <Product />
            <CartPage />
            <h2>Carrito de Compras</h2>
<ul>
    {cart.map((item) => (
        <li key={item.id}>
            {item.name} - Cantidad: {item.quantity}
        </li>
    ))}
</ul>

            <h1>All Dishes {count}</h1>
            <h2>All count {cart.length}</h2>
            <button onClick={() => setCount(count + 21)}>Click me</button>
            <button className="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg className="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span>Añadir al carrito</span>
            </button>
            <hr />
            { dishes && dishes.map((item)=> (
                <p key={item.id}>
                    <strong>{item.name}</strong>- {item.price}
                    <button onClick={() => addCart(item)} className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Añadir al carrito
                    </button>
                </p>
            ))}
        <ThemeComponent />

        </ThemeContext.Provider>
    )
}