const Navbar = () => {
    return (  
        <nav className="w-full p-5 bg-nav">
            <div className="flex justify-start items-start px-6 py-4 box-border rounded-xl space-x-3">
                <img className=" box-border mx-11 my-4" src="https://file.rendit.io/n/oIlH9UVBGk3hJVbbeJLl.png"></img>
                <ul className="flex flex-grow justify-start items-start text-center gap-6 space-x-[100px] pr-[150px]">
                    <li className="headerLink"><p>Products</p></li>
                    <li className="headerLink"><p>Docs</p></li>
                    <li className="headerLink"><p>About Us</p></li>
                    <li className="headerLink"><p>Blog</p></li>
                </ul>
                <a href="https://admin.decaf.so/" target="_blank">
                <div className="flex flex-row justify-start items-center px-6 mr-10 py-4 mt-2 rounded-xl box-border bg-button gap-1">
                    
                    <div className=" font-bold text-xl text-white">Get Decaf{"  "}</div>
                    <img src="/arrow.png" className=" box-border my-1 px-1 w-7"/>
                    
                </div>
                </a>
            </div>
        </nav>
    );
}
 
export default Navbar;