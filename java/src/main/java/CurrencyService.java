public class CurrencyService {
    private final HttpClient httpClient;

    public CurrencyService() {
        this.httpClient = new HttpClient();
    }

    public double convert(double amount, String baseCurrency, String targetCurrency) {
        var value = this.httpClient.get("https://foreignexchange.example.com/?src=" + baseCurrency + "&tgt=" + targetCurrency);
        var newValue = amount * value;
        return newValue;
    }
}
