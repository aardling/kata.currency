import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.Test;

class CurrencyServiceTest {
    @Test
    void ItShouldConvertCurrencies() {
        var service = new CurrencyService();
        Assertions.assertNotNull(service.convert(100, "USD", "EUR"));
    }
}