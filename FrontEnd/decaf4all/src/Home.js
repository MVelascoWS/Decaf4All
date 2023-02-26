const Home = () => {
    return ( 
        <div>
            <div className="mt-10 text-4xl font-bold text-head text-center box-border">Get Decaf in you Business</div>
            <div className="mt-2 text-md font-bold text-head text-center box-border">Tell us about yourself and we'll get you started!</div>
            <div className="w-2/3 align-middle items-center left-11">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 text-labelText" for="username">
                        First Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="Username"/>
                </div>
                </form>
            </div>
        </div>
     );
}
 
export default Home;