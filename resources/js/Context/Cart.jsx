import { createContext, useState, useEffect } from 'react';

export const CartContext =  createContext();

export const CartProvider = ({ children }) => {
    const savedCart = localStorage.getItem("cart");
    const [cart, setCart] = useState(() => {
        try {
            return savedCart ? JSON.parse(savedCart) : []
        } catch (error) {
            console.error("Error al obtener los datos del carrit: ", error);
            return [];
        }
      
    })

    useEffect(() => {
        try {
            localStorage.setItem("cart", JSON.stringify(cart));
        } catch (error) {
            console.error("No se ha podido actualizar el ccarrito: ", error);
        }
    }, [cart])

    const addCart = (dish) => {
        try {
            const index = cart.findIndex((item) => item.id === dish.id);
            if (index !== -1) {
                const updateCart = [...cart];
                updateCart[index].quantity += 1;
                setCart(updateCart);
            } else {
                setCart([...cart, {...dish, quantity: 1}]);
            }
            console.log("Carrito actualizado:", cart);
        } catch (error) {
            console.error('No hemos podido añadir al carrito: ', error);
        }
        
    };
      

    const deleteCart = (id) => {
        try {
            // validar si existe y su cantidad
            const exist = cart.find((item) => item.id === id);
            // si no existe
            if (!exist) return; 
            // si existe y su cantidad es iugal a 1 lo eliminamos
            if (exist.quantity <= 1) {
                setCart(cart.filter((item) => item.id !== id));
            } else {
                setCart(cart.map((item) => item.id === id 
                    ? {...item, quantity: item.quantity - 1} : item,

                ));
            }
        } catch (error) {
            console.error("No hemos podido eliminar el carrito: ", error);
        }
    }
    
    const clearCart = () => {
        setCart([]);
    }
    return (
        <CartContext.Provider value={{cart, addCart, deleteCart, clearCart }}>
            {children}
        </CartContext.Provider>
    )
}