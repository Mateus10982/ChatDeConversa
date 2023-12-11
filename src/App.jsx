import { useState } from 'react'
import './App.css'
import {GiImbricatedArrows} from "react-icons/gi"
function App() {

  return (
    <>
    <main className='corpo'></main>
      <div className='test'>
        <form className='tes' action="./php/scriptPhp.php" method='POST'>
          <input className='inp'  type="text" name="men" id="inpp" />
          <button type='submit' className='icones'> < GiImbricatedArrows/> </button>
        </form>
      </div>
    </>
  )
}

export default App
