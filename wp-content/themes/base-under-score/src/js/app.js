// webpack初期設定テスト
import $ from 'jquery'
import {add,subtract} from './modules/math.js'

const item1Price = 400
const item2Price = 600
const coupon = 300
const totalPrice = add(item1Price,item2Price)
const priceAfterApplyCoupon = subtract(totalPrice,coupon)

console.log(priceAfterApplyCoupon);
$('body').text(priceAfterApplyCoupon)

// babelテスト
const message = 'Hello Webpack!'
console.log(message);