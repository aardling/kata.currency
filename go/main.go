package main

import "math/rand"

func convert(amount float32, baseCurrency string, targetCurrency string) float32 {
	var value = httpGet("https://foreignexchange.example.com/?src=" + baseCurrency + "&tgt=" + targetCurrency)
	var newValue = amount * value
	return newValue
}

func httpGet(url string) float32 {
	return rand.Float32() * 2
}
