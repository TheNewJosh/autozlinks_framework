class UrlApiService {
  static UrlDomain = () => {
    return "http://localhost/autozlink/autozlinks/autozlink_server/";
  }

  static UrlApi = () => {
    return "http://localhost/autozlink/autozlinks/autozlink_server/api/v1/";
  }

  static UrlApiHeader = () => {
    const myHeaders = new Headers();
    myHeaders.append("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiZDJhOTliYTIxZGQ5ZDI1YWI0NTI5NzJhNWY5YzY1ZGE3OWM4ZWFlOWZlNmM4NDQ0MWY4ODIxZjBmMzM1NWNiYjY5MDdkNWM5NzY1NDNmMTYiLCJpYXQiOjE2NDQ5OTk0MDcuNDAxODg4LCJuYmYiOjE2NDQ5OTk0MDcuNDAxODk2LCJleHAiOjE2NzY1MzU0MDcuMzg4Nzg0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.h20b-1-4bY_qOCK63fGg1oiT2gb_xzvAM9zwBcgJXN7PSyyG7VabBXAukIGorXtmWtuaEjEoJSPFYogjsc35bgQgoC16UmYFmkNOji72TD494f88rhK5Hhw9Z3yg5ue9Hph-jcdoY73GRlFPudPDmnNBk6x1dwX7ZRwi3LefF4OFU641vxA0lB_DLR2K3P26Ruz01KOqEELaumY33_hSs3PZjkkhekdeDNEKPOVVGubUOporeyCrq3B1NegSh_3zAEvuni-lsa7hPltp3uk_jHs9xWcoB1LQwckKpE23X5RyUcNEflEq5_uoFb5WStzQa6UTBXe3OS1Dn6hbTzG4_UcKzDbWomqZR5IsiiEY-Ic6mU61bz_SEgbGZZhS4aJzcHrVSL5oRLZi6RGewUo4NuzAitvTgCgjoUVeSYf63BHeuwHWZG87g3vedM8o5br74jF0iliHZvWv9A1OFM9DcslP7qAEGAE4RC-Ik5lN4CSvWcQs2WcHIFfr3R-gJt1vyfYb92jQsZlQ1POgR8_4D1T0t-XCDgECBKX8VD_AFSUuTqI4-RnKGHVw_jj1Bd6Q3mFRaE4sRbrPLEICMk9aDN18qFr-tKIZdjFsqGG-55v0YaZuX_nApIuJaZ0fyYL7RRdqbLrP_VlVPBsRVHKVMeH5XLF9VHhWv-7DIWIzMXI");
    myHeaders.append("Accept", "application/json");

    const requestOptions = {
      method: 'GET',
      headers: myHeaders,
      redirect: 'follow'
    };

    return requestOptions;
  }
}

export default UrlApiService;
