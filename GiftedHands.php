<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie Wallpaper</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: "#3b82f6", secondary: "#10b981" },
          borderRadius: {
            none: "0px",
            sm: "4px",
            DEFAULT: "8px",
            md: "12px",
            lg: "16px",
            xl: "20px",
            "2xl": "24px",
            "3xl": "32px",
            full: "9999px",
            button: "8px",
          },
        },
      },
    };
  </script>
  <style>
    :where([class^="ri-"])::before {
      content: "\f3c2";
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #0f172a;
      color: #f8fafc;
    }

    .movie-hero {
      background-image: linear-gradient(to right, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.8) 30%, rgba(15, 23, 42, 0.4) 60%, rgba(15, 23, 42, 0.2) 100%), url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExIVFhUWFRoYFxcXGRgeGBsZGxgYGx8bGh0YHiggGx4lHRcYITEhJSkrMC4uFx8zODMtNygtLisBCgoKDg0OGxAQGy8mICY1Ly01Ly0uLS8tKy0tLS0tLS0vLS0tLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBKwMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcBAgj/xABJEAACAQMCAwUEBQgGCAcAAAABAgMABBESIQUGMRMiQVFhBzJxgRRCkaHBIzNSYnKCsdEVJENzsvAlVGOSk6LS4TREU4OzwvH/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFAgEG/8QANxEAAgIBAwIFAgUEAQMFAQAAAAECAxEEEiExQQUTIlFhcbEygaHB0RQjkeEGM0JSQ2KC8PEV/9oADAMBAAIRAxEAPwDuNAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAiuZbtooSyNpOoDO3j8ap666VVW6L7osaWtWWYZ+f+J3lzPezPJczHvkACRgoA2ACqQANvKu5zl5CmjuFcfOcGWzhBnJRvpMv5NdKnW2ynOfH1O59PIV85d4jfF4TNdaSnHKKnxznIxsUtXdgNjKzsQT+oM9PU9fKtXSU3uO66Tz7GffOtPEIr6kKOeLwHPbyH4u3860kmUng2YfaffJ7srfMk/ca6wzjgvPJntgMzCC7xG52WQHuMfJh9U+vQ+lUNY9TXBzq5+O5Yq8uTxJHQLm5dh7zfaa+cn43dgux01fsV6+4c7n89KPg7j+BqJeNXvuTrT1exGS8Df/WJ/wDiyfzqReMXe5ItLT7GlPwN/wDWLj/iyf8AVU0fF7vc7Wjp9iO4TZ3UN9bOlzOV7eMMpkkIKswBBBOCCCa1tJ4k7Goy7lTVaCMYucTv9bRiigFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgIHnVSbY4/SX8azfFk3p+PdF3QPF3+Ti9nYF5W8yz59MORS+9U6CMn9CWEN+tkvhGpzrxEx6bSNtyAZCPXov4n5VmeG1b83zX0/kt6qxrFcTc5a9mDXGl5n0oQCQPe+FXY6uU21WvzIJ0wrXr5fsTHEvYzCo1JM+PEHH3V3ZfqK454ZHXGibw01+ZVeM+zVIxlJmz5MBiqlXjE922cS3/8AzK5rMJMoHELFomKtvjxrbqtVkdyMm+iVUtrO2eynmBrm00SNqkgIQk9Sh3Qn7Cv7tfGePaTyb1OPSX37mhpbN8MPqi4uaw0XEYHXIqWK4ydp4NKZaliyaLKxfvIt0mlyB3G2PiGO/wB1bVDUaFJdeTmXqbT6Ha+GSFoY2bclFJ+JAr6uiTlVFv2R8zakptL3NmpSMUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKA+JYlYYYAjyIyK8cU+GeptdDlV7bql9OFAA1nAAwN+v31i/8h9NEEuhoeFScpzb6nM7xO14o6k/2+PsIA/hSt+Xok17FlLdqXk/QXBkwoHkK80SxFEGqbcsm7cNlcVbtaccEEFh5Ofc1Jgkkjbw+NfNzji7Bv6WWYHJebbYEagPGt7QTx6WUvEa8rcSXsTuWF3LGPdeHUfirLj/Gftqt/wAjrT00Zd0/uZ+hfraOxSV8YjXRD8y3jxWk8iHDpGzKcZwQNjg7Gr+grjZqIQn0bObm41uS6kJwiO7eNHknDErndAOv7GkVfvnpYzcYwax7f7K9WosiueSu868xS28iQo0evGpnMMZIGThQWBPmetbfhtNV2n5jxz16lXUamxWZTPbb2yX6Rog7M4XAYqM7bdBgeFbFcYxiorsZ825PPuYz7YeJk/nlH/txbdfNfT7674PMM2YPavxPoZVLdRlIgCvmMJv9tcZyztxwjUb2t8TZ1H0jsx4gRwkfPVH0rybkllHsYpvDO08mXc8uh5bsyhoydGiNRnKd7KqDtv6d74Yz9HrpXTcJYzzx9DqyvaW2tMhFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUBy3iz/16YZ6OflWF/yGea4RNPwmGHORS7PhhTjZ1e7IrSqT5nAI+IOarxt83QRx1WEy3t2ahv3R0S+48YIzIPo6+Qmk0k/AHFSaebS3RX8kVlacsN/wfHD+cDLDJMU0hAD3QX8/0MnFHdbz0+33O5aaEWlnqUTiHNxmLt2gVI/ecRsQM9OgbGTnqFzg16tBuW6cW5fXCO3qI1vEZJL/ACyo8QuXmdlLa/DcFT8wQCOo61arqjUlxg4lZK3KTySnsXiAurjI7yxYBz074yPngfZVT/kUm9NHHv8AsU9DHE5HWpZB0zuelfIRhLGccGskQXNe9lcj/ZN/Cr/h/Gqg/k8uX9tmWwXTApPQICfgBXtkXKx47so9DjvPHEknuS6KVGkAk5BOCd8Hp1FfY+HUSppUJMoXyUpcEXbW3atgHooPwqzOexZZ7XU7HhGY2rDP5CQny0sR9oFeKxNZ3I6lW4vDizDxCOf3mhkRQAu6MAB5EkV1CUOiayR2Rs64Zoo+xqRkSZ232D8RlkmCOSQtvJpJ64EkQH8aoV0Vw1UpRXLRLOTcEdvrQIBQCgFAVznHi8kRtreFgkt3OIlfAPZoFLO4BBBYKMAHbLAnOMEDNdcuZXMdzdJICCGM8rAkEHDI5KYOMHCjqcYoCLkvJP6dWDtH7E8PM3Z6jp7QT6NWP2TjHTxxnegImLikf9JcSt7niDQIhtxbq1x2eDJCWfRqILHUQcb42FASPPsMlvbNPHc3Aka4hH5xtIWSdEKhegGlsff1oDZ5wtntrC8miuJ9SwFk1SMdDIGOVJ88jIOQcCgNjla4t5lzFe9u3ZKJUWftNLN4nSxKHIYeH3UBEck2kt3Y9o93crMZZ0EiyE4CTOi9xsocBR1G9ASnInGp5lnhutJuLScwyOowsgwGSQL9XUp3Hp8qAjouPxwcWu47m7WKJYIWiSaYKup9evSHYA+6u3h4YzQGTgXGVn4tOsNyJoFtY3ASXXGJGdw3ukjOAu3h86AcT5jkj4rBHkfRSTauc/8AmpEEyAj0RUA3/tjQGTnnjdzazW726GVFjmkuIR7zwq0Clk83TXqA8RqHjQG1xDia3CWM9tMxiluEBZGIDRlJCVYA/pKMg7ggjzoDRgDy8Wu4GmnESW8MiqkrqAzlwx2P6o26elAeWfEbm14j9BllNxFcQvLaySBRIrx+9E5UAOMd4MRnw3oDz2fcSS7RZfpE30uLKXkLyPgSYII7InQg1DKlQNlI65wBd6A5HxNv9I3H94f4CsDx6PpizX8KfEkfFxaMbuCQEhSrxsASMnZ1z4HGl+viax9Hb/ZnV7tP9i/ZHE1P2ySd/wAjRzZJVWJdX1OGLAr0AII7vTu9NhtWvVHUQjiEuCnO6qTzNZJbhPAo4IZ9IGXzk4ABO5JwNhuSa6cZeTPe8/JG7E7Y7Vgotvw0YmjxhJCGYBVIbT4kMO9g7+npWc9Xa0pZNd01x6JGhPy62WEEbTTMudtIwuRuScKOvnVnT3Su+iIrXGtbumSU5B5LazaSaeRS7rgqh7iZIOGbGS2w2WpNddVelB9F3z3M+mEottdWbnMssnaoFJGACqN3ck+KHwb0qj6fwtcfb8vY1tPFKvcab8TWaCWNziQKykEYJx6Hx8xUL0k6LozXQ4e2ae3oQx5oUIY8nYY6HH/cVahopKe8yZTjlo5jxlcSNgAKTkY6eH8q+npknFGdZ1LL7PXhUs8hxvhiVYgDw90HGfWs3xSNs8RganhsoRg2+p1duYuzi1W8fbdBtsq9Pex0+ZHxFZOjbjLbP9S7bU5LORD2t5CWlC6SmdJIOGOe6yhcLjAyMt1G9daiHr3qWdvPBxVNRWNuM+5wqHhk3amEx7htLbbD5+WN6+ilqK1X5mTFdcozcWjtPsgseyvGG3/h36ftxVR0V3mXN/B7csROxVrlYUAoBQFW584JPMtvPa6TcWk4mRGOBIuCHj1H3SwPU7beGcgCI51nN/apAlpcdt28DFJIHAULKpf8qR2Wyg9HOaA3pLOT+nUnET9iOHGHtAp0doZ9YXOP0RnPT1oBy7ZuOKcUeSFxFP8ARuzZlOhxHCUfqPA7b9fDNAbHtLtpJLLRFG8jmeBtKAk4SZHY+mymgNjn2J5eG3UcSO7yQsiKFOolhgDGNvnQGfgXEAyovYTIywLrLxOuCoUaASO+dz7ueh9KAr3s/vGtrTsZra5WXtpmCiCUhg8ruuHC9muQ31mGPGgJvlHhEkX0ieYBZrqcysgIOhcBUTI2JCqMkbZJxkb0Bp8Jt5Bxe8lMbiOSCBEcq2lmTXqAOPDUPj4UB8Rq6cXuJzFKYjZxorqjEM6O7FRgbnDD0oCJ4lyk8/DHl/Lretm7CGSTCXOrtAgjJ0ZXaIHT0UfGgJy2uZJbuynaCWMfRJ1lDI35OR2tmCk4x/Zvv0267igI2Xlaa2voXtAPoUtx2s8P/pShHHaR+SsSAw8Djw6AZY5Wg4vdTvBP2MlvDGsiQyuC6FiRiNS31uuMbHegNmSzlmvPp5hZUtbeRLeNsCSWSTBZsZ7i4UIA2CSWJAAGQMNvYLNxSG9t4ZYsQyJdM8Txa8hOzQiQAuwIJ1AEYTBPu0BdKA5Bxc/6RuP7w/wFYfj3/Tia3hHWZsXDHMTjokgZh+qVZT9moH5V83p5KDkn3X2aZrThngtNrxTWAi7Z8fKtqrWb47I8GbZptr3MguL297MZEgul7L3F0R4UD9Zy3eb4VJN7vSuUvnCOqtkPVJYfzyc8vL66tpUF1IwWNiqnSunpjdl+NHRVZFxqXP1LMbdr3WPh98HQOXO9EJkjRjIxBdskrGCQcAe90zjxzVautwjsx+/6HmokpS68Lpj+T6vuMFCDBby3Eh2yQI0HwD4x8s17FQUuvPu/2SOfLlt9XC9k/uzT4Sst0J0uUh1qde0hYqDsBjAxjT1z41664Ti5wbyu7WOTpzlS45XD7L2+Sh8xTRxRvjBIOkEbHfO/62D5+tS6RTtmm/qWtVKNVLaRDpCSAfHG9WpSw8GA1k0OKcLZ8afDwOasUaiMOpHOtvobPKHB/wAvonH5JhudiNQ6ZB9Ca51uqxXur/Evt3JtFX69suj+51zgnFIopJ0Gp2cgqqJ7x8d9kG+/UDesqiyXM5vqad1TcY7eMG9e8QdQYwFwRk40jTnwYA9fhVfUTsjHb2Z7VXFvc+pzyfhctzdv2Cs3QbdNh1Jq5Q9tMYtZZR1ePNbLr7NeEzW/EGWYEH6M/X+8iq9oX/daxh4KNv4cnVq1ysKAUAoBQCgFAKAjLnhRaRnD6c9jsB07ORnbfP1gwH7vjQHxacJZC+ZM6otHToQ0h1dfHWB+79gGvZcvsihTMWGhV8Qe7KznBByCQ2nIxjAoDc/o58JmQPpZyQy91w2cEgbBhtv097YZGANebgjsc9sfzwmAI2DBSukb7J7u3XZt99gPBwRtWTLkd3AI3TTIXyh65YHSSc5CrnODqAzW/CWVGQylgyIoznKldWcNkkgk5AOcdNxgAD4bg51atSnvBipTusBGUIIB8SdfxA+NAYbbl9kH59mOIxqOdXcWNc5zklgr5zn3/jqAnQMUB7QCgFAKA47x1gt9dSOQsaOSzHoBgfM/AVQ12hu1jjXUi/otTVp4ylNk5y8Y5UJK4Yj3ZBuuc41AbAkY7u5BOKlo/wCP0afDn6379vyRDZ4tZc8R9K/UqN/x1HjeFJD3J+yZxsSofST8OhPoTWFPRy097WMpZwbNV0bob1+ZI38RjQB7mcqFCosAiUAY/WBx8sfOooXwcsOP6snhBvol+aKBzBDEW7pmVfra3zn1ONvsxWlRY+yRxqIJx9TZ2DkW3VbC3C7AxKR+8NX41G03KTl15KEsLCj0POJalLsW0DAGryFZdsZKTb4L1O1pJLJrJZi24azEYkmBmfPXvbqp3PurgYzjOfOtLVLZTGtfBBTJ26pzfRfocIvblpZMM2wJ28P87Vp01KEfSuSpqbpWzxJ8Eil2+sLGpYnGB51X8lSXLI7n5byW20spyMukWw6K2on0AxjPzqvLRf8AjIrPXQXYr3GC0jFY8xEfafj5Vb0+mjBerkrPXSk89Bwjj5WXRMezcAZO+hh5kAjf7jUOo0eI5gsr9UfQaHxFT4l1LnHxpJ1EEJJyfyjgAKF/Vx4+FZNsJxfmWr6Ivxw3lMjuD8QnsroTRE9lNhZE67gZDKPEhQdvECtXRXKS2PqjI8Wocf7sWdR5Z4qZ7zLlNQgbAUYONSZPU5GcfD1q7XWnb5nfGDGhbJ+llzq4SCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAp83D/wCtTEgYk8x6DB+FWqZYRFJcnM+Xr6YWlxNIW/J3Ol1XqocBW0eqS9mw/ZrU1O2OH8fYrRWZYRS+CxBprqF901sMfBiuQeuem9fL6uqXk+fDrH7M3dDOPmeVPpL7oyzXd7bdwP2sY93UcnHz/CqMYaa/1NYZdk9Tp+Fyv1KxxG8llYl87np+GK0aq4QXpM2622x+o/UXLtoY7aFMe5Gi/YoFZUU3mXyy1Lh4Kv7QOJA9nbg47R1Rj5BmC/jVZ4stx2XJoaWOyDmavtO4owjMY8ugrmMnbes9EdaeChTKfc47YwMRI2knCnYZ8fh6V9Tpq8xlL2R87qJYkl7suPBuz2KJuVAz459M1QhRHOXNZ9snmp86xYUXj6FujtJAv5ib/hv/ACqSVMl2M9QbITinL0sgJSGYPnY6HzuQT7wPrUirkebZLsRL8h3MoGY5terqVfIGcY3HkM4pJSS4RY08pRknJcFv4fyNPbQnuk9094Kc7jy618/qqNTZLe4cH1NWsoilFMycXhAEaxwzHSck9k+2lCo+r6/dXWh0042uUk/zKHiN6sp2xecm97LYNN2+IZIwYXPeiZQT2iHqRjJzmt6CeeTErg1LLOq1KTigFAKAUAoBQCgFAKAUAoBQCgFAKAUAoDDeXKxo0jZ0qCTjc4FcTmoRcpdEdRi5NRXVkTac1W0jBA5BPiw0jYE7k/Cq1WvotlthLn6Mns0ltcd0lwb0fGLduk8R+Dr/ADq3lFY+jxWADPbR4/aFdYZ5lFZ49xyBJVkE8WnYMS4GD4fLoD8asU4w8nEnzwc8sLqP6PxD+tWqmSWR1BkAXvSA97rgbVd1M1OtKPZYIILbZlkPw/hsKSyt9NsTqmdl/LLvG7HZttjv95qtROtV+XPvwyacpZUo9uSRueBCRT/WbZhjIIkyceZwMVgvwq6ubcOhtrxaicMT6/ua3LHJMTS/SHuYZEi74VGDAsDsCR5Hf5V3qK769PKUV2K8b6p2pZOm/wBPqkRZtOkbAg9TXz9PiFv4JQwXf6dTlwzjXPHFllkfQxZj0x4AkffvWp4bpbHmcl8kus1EK4qtPl8fQtHNFoy26vkszxqFBPi2BuevjWdpY5v2vvyWbtQ41S2roV4cryJE0hlCDKklcls5GFUeJJwK2KvEpQb08Y5z9jDtpU2rM4waTczENpDtpx12z0BGwycb1dqo0yal5SyvlkU77+nmPH5Fn5F57XWBLdtCVbdZnbQVBGQGJx08DjxqDX+bK+Nta47pP9jqiVaqdcuvZnZzxfUoaNQwIyDq7pHmCM5rh+IRX/ayPyX7mn/Sd2ekMPzdv+mu46zPYeV8mpxjjd/DE0i20D6RnT2jgnH7tSxvz2OXD5LNZT640fGNaK2PLIBx99WCMzUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUBAc/Ix4beBASxt5AuOudJxjHjXMsY5PY5zwfnC1W5j3YyDGxzq2PzrNsUOywW42TksN5Ii/vHEhwxHwOPntVyn8BUsXqJvgXMFzFHhJ3RSSxAIwTj1HpipLrZwUVEjrrjJybPb7mW6miKSSvJk+7tvt+qN68jKUvxM72pP0orlrxMqXRukhAY+K4YHOD8KvUXbMrs8Fe6nfiXdZLn7MoEfjMSsFdVWQ4ZcgkA4OPOkU1ZZh+/wB0cXPNVe5e32Z+gzbKIjjQPyb9FxXm9uX5karXlvp0fY5n7E5yLGR2dd7rHe3PRR1z8hU+N0Use/3ILrPLsbyl+HqRvtI5tWaZYFORG5zjoWIK4rK1+nbkq0uTe8L1K2ux9Cm8NsBLMx8QrMcerMg+9CfnV6uuNMbPaK/YgnZK22PvJ/udS5msGeKHSBpRU1fDUo/Gvk9LF+dCfZI2rppVTT6sp3H78NIY4wMRo5wxA1Fk04GcgsQSQAM4z576Ojr/APUfVmddLHpXYpHHGSORdgHWNRpU5GQPHA3J3rRSK3cr0uWckDqSQB/AV7nB6ot9Edm9lPOtpbWIt7mUo6SOQNDkaWIOAVB3yWPzqhqKXOe6Japqm1hI6FDztw/b+tIM9NQcfbqUY+deRplH8SJ7NHfFZcWbnNUoawleNwRpBV0IxjUNwRUlnprk17FaqObYp+5KcruTaxEkk6ep69Tj7q90EnLTxcnyc6uKjdJIlauFcUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAhedbR5rC6ijBZ3gkVAOpYqQAPnXMugZwGD2d3sLa/o82MHVhSfD09aoWzslDDgKW0+SrHhks9ysESFpHbSFA8fM+QHifCp6pJV5Z5OXJ1ThvsiuRavHIYNbKMYZjghieujbw+ymoVs3B1rGOuTyhbd+/v0NfkTg8Nqr3E0RZrd3jcAjKTKzMMhtt004weoXzrh2+ndIt0xzjHUpvP8tvLJqjUKzY1ZUqVzuNW2xwelQ6CFylib4yWdXKry+F6jZ9lF/FHxgPJMqJplAdyADnpudhmtxcznjn/9Rg25VcG+MNZ+OGfoF+YbQxNi7gP5Nj+cTyO+M1xskpdDrzYOGM9jmnsZ4tBHw1lkuIY2N0TpcqDju+BPjU8IuWGlnr9ypqHtk1nH4e2TmnOM2L+4kVw41MysvTyGPtrmxp35XZL7FzSpxoS9/wCSa5FVRrGR3njgTzYjXI3+P7qqaz06O5+/Bd0vOqr+Of0Ot8ZlVIJPRY1x8ZFFfP6eUYZz7GjfFyX5nLuZuJxxIBL2muYtIojAAbDhQJQwBGpUHwB8xWrpoKMU0+Cha8ywaVlahZo2Nup7V8kKMqi573lp3I++qVlytUvVjBr10eUoqK6nvN9lGiuYx4agcEbb4O49D9hqDRynvSn9Czek6m11RAcswLKXJ+qNX3jA/wA+VfRaepOWGPB1C9tP6mDjc516Qajn+IeLahqzbFmXlzj1xbuRDIdL4DRneN8ke8p2Px61xtRiym5dT9Z8MAEMeAB3F2AwBsPKu0klhFRvPU2a9PBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoDFdTqiM7HCqCxOM4AGScVHbNQi5N4wepZZFScw26gZnAz0yrfyrOj4lRLpZ+hI6pLqjg/tUUR8RE9ozB5O+HQMp7Xp3RjIPQnrkvUuktjbuSkpc9kR2Q28vguN1zdOsert5VYyysEbGrQwXs1OCcYwTpHn57Vq0+F3uW62WI+y6v+DKs8TjJ7KVn/AN3ZfT3Nu15mtonMDBVM1tDcszYBld01OzHbve79o6AVn+IQ8vHHpeen1Nnw+W/Kzyv4OTcxcV+kzTylVOrUdXmVTIA2GSoAO3TaptDVj1z9nx8nfiFqWK4e65+CvfRQ6k4wwGfQ48MVddSccoz3a4yw+hG1XLB6w3r1rAJS6XuxMPrISB6IcfeQa6prcFn3yzu2xSa+C2+zwa7qzX9BJp2/aZig/wCULVTxWzbpVH3f7/6JtBDNzfwdV413kkHrH/8AItfP6f1WST9jTu4rRi5n5AtrwM7ArMVAEgycY81O3ptivaNVdp1tXKKc4Rn1KWeSL+1ZZvpiGO3OsOderGN104J8MAZbqMeNXa9XRe3GMMN9T2LsjjMspdim8zQ8QiwJoZYlCAAaSQF2wC3ids/HPnV6pU5xnn5PLbb3HhcfBh4Fcu6XBz+VkZSz+ODqJPzO3zrQg5KLUS54SrJV2Rr68c+y5Ii4Xds+Bx/n7KhKV8HGUsmxwRvyyHbAdfj7w+6vccFXPKP2Lafm0/ZH8BXpEZqAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAh+b5gljcsTgCCQ/8pqHUR3VSijup4mmzk1tzbaFVEqyMwAywUb18fLw7UbvRhL2ybH9RD/6jd41xuFIVKIyuV3Ldeuwxk49a+y8A8Glo86nUfi7L2+fqfGeMeJ/1k/6ah+j/ufv8fQ5TxfjBdzjbxAz08fuJOPjWpdq3J8Hem0u2CFpIJpGaZixJBGok93GMKeqgdMDoMeVRRhGzLkT2WWVpeWfHGLmR41G3YxHSiICFBbdmY9WdsDLE75wMDavJVqKz2JYWb3l9WT97wQdgso2OgHHh08T4k1tSojKtS+DChrX57r+SocdsoIzH2ErPlAZA64KP4qCNmHka+fsSUmkfRVSlKOZEZId65k8vJ2iQ4lOCIQPqQAfPLZ/jU9kliKXZHMV1Lt7HY8zSSH6qKg+ZJP4V894xbjZE1/DoZUpfkdK4vJ3euAZY8n0EimsrTzxb9S7bDdBourSx4GXTp+kK1Z6bPYy1GfsyJ4o0R0EkOkbiRwuG9zvLsNz3wm3Tx8BUVFLqm5Y4JHGWOeCh+1HiyynQurUPeU6dsjpjPp602uy7zC9pZKuGzucx5aXSbg48AAOm5JP+fnX0FMvS2S+EwcLLWvp9yP4uNJCdT77fFug/wB3B/eqNrBQ8Qai9i+r+r/0YuHbMDj5/MbUM+PVH7F4ScwRH/ZJ/hFekRt0AoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUBC86W0klhdRxKWkeCRUUeLFTgfbXkllYPU8M5JyDyNeGVpLu20IoGgaozl87nuucacfafSmkqphPfLnHQq+JSvtq8uvv1+hcOJ+z2OYbrIvqrDP3kitOeqjPhsxafDrquYr7FXu/ZLDNpjS5ZJEzntFGvTnO4GNW567VV1N0YwjFLL98mnpI2SnLPC44wz4u/ZBEi4FzK0mNgNC588Ag7fP7KzJ626Dzt4/PJqQ01b7/wAGrZ+zAsDkuqpqTDyqgffOemog/Lw8q26rtPZXGXq5XT+TFtjrYzlGKjw+H/Br8w8CuFj7NFUrGuAkbq76RtgAMWb767t8X0cV5W/GPfJBp/DNSpO2Uct85WCjNwlmjZ2RgR1BBBGPQ13p6I3UuyLz9C1ZqPKtVT4I5bLI1eGa4WmUluJnfh4NabZhjbAI+7/vVG7iWC3B5jk6L7NGjVHMeoAsM6sZJCgE7dATk48M4ycZr5fxpvfE+g8Mj/Zf1LXxq6zpHUAqT8dQqjo3m2JoKPA4rxBhjdRsT887Hr09K+yRaopTM/KfFNFxjVnXqXz3IJBxncbdB4VXu/DkreKVxdK7PgpXGuL6ZrmNiTqYsGYEA+ZGeh36eG9Zb07bUlz7laFsVw1jjgqFjPoR5DvqY4H6WPw8zWzBbUiPS3+VVO3/AMnx8kNcSlmJY5JOSfWvTCtm5Sbl1ZtcIj1Sov6RxRnkXyfsXg4/q8P90n+EV6Rm5QCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQGrxO5EUTyNsEUsfgK5ljHJ6k28IiLTmGOQhkc6DnfbbHw6/bVCE9S7cJZj78cfySSjGK9XD9j7n4xH0Nww/ZUfipry1XvjL/JHsdvXj/JoScYgQ9o0pbSrd5k6Ajfoox0+6qPl6muW5bn+RL6JLHH+SJvebLZ1bS6sQP7P6xwe6Q2wJOK9/rtZlKyDXyun+CevTR7P8mUO+4wu5+hLv8ApSL/APWtOvxPVYwp/o/4K8/CNK3ucOfr/s0brjpdNAt418m7RsqfMbbGubtRdf8A9R5/+J1Ro6NPny1j8ye4BxeIxOJnYu0bDQS0uPLBKZ3qx4XDyHKTeE+yWPzwVfEYK5xSj075KO8KmPRsrKxIyCCR5fd0Naeg1UFX5dkuckGu07c/MrXGCoXOdXdyd/I1BqMObwdVJ7VkuHJF2IlZSCNwftANfO+J1ObTR9F4ZNKtxLDdXofG+SZE/wAa1V0dLjbEt3WqMeD3njmCONtEKBiF1avqjOenn0//AGvrK690c5M67xmyhqEFz8lJ4hxVmuU7xGh1xpyAN4jkeRyKg29YvoVdfqHOW7nKX+/uTnMnAUlghuFklaYgG4DkELlVI0hVGAwII+PxqpUnG11RjwlktabSz1kN7lz+3cr3GZtCBQoXbAz1x+FXZe2C/wCJ2+TUoRjjt8kTwm5hSVWnhM0X1kDlDv4hh0I9dq5Plyc4lcWa3Yay7QWypG+JN216VLAnwwdvLIONsUTeMHuFnJ+rOCyareFh4xIftUGvTw3aAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKA17+1EsbxkkB1KkjrvXFkFOLi+jOoScZKS7FcTkaIdJ51/ZfT/CuKaY1R2x6HVtsrJbpdTPJyirYzcTnHTLD+W9TckZq3XIcUilTNNgjB71Ach5h5H7K4kjRiVDHBJPTwqpqLHWuEX9LUrOrNJOUcdX+8/zqp/VSa6Fv+miurPp+XpgdUUjah0KswPywaRvs9hKmvHUi72fiUT7XFyudI1dpJtkgefrWjQ5ShuaM3URjF4RcDyo+nDzs5I95nn3JHU4lFVlmNm79kcS1Oa9uOffJD2nIgjY5kLZ8NJx9xz99SS1D9iGLeeCE42ktpOQ1tgbZ7QP0x1IV+7tjY1zF13cN8ouLzqluS4J3hdwk8aSLDDgjBBWXIYHfpNvv41ztjXLoQWamyXDZKWotxLpurePQUwJOzZgAPDvOR0BHzpPVKxOpS2v3R1CtvFkllHOr6NJ7+QQDEZlJXSNginOrA2Gwq5TW4pRbzjud1Vy1Nu1d/0L3PxeNbdYzIPycSg7YLBSdIJxvjP2Cr8HCCb7n1Wkor0UHnt9jmfG+JGeQtjA8B/M+JqpJ7nk+Z12reps3duxoAVyUjPY++PLxzuMeoNAfs7ggAtoAOnYx4x0xoFAjdoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAjb3gNtKxaSJWY9TuCfsNcuKfU6jOUejNNuTbE9bdf95/+qvPLj7HTtm+5s2vLdrH7kKj5k/xNe7V7HLnJ9zU5l5dhlt5VEahiux6YIOfwrr4OH0ICxiJtppkiErxDCoTgE4yT6kDoKrajMa2zzSqM5JSOacjcVvJeI6JOgOohxshzt6gE/jtUEYw2Jp5+S5ckp9MGXmvtZrpzOYgwRWAQEq2oDYgnwB67dPWqjlBbpc5bNOuFkoxisYIrlpDEkgxhdZKkjqDjOAfAdKvbt6TMbVQUJ4TL7xy+EnDIFAUZidSxYAZQNn1ycdKoaqHrhjjD/yXtDHdBnGuCcWSGGRSDqby6kEbZPkK+irtUYSTXUueHa+jT6eUZL1EpaW1xcRjtG0xk7Iv1s4OT6bjb0qF2yfpKd2vvur2yfBTJBufjQzT3FAZ7CLU4GM5z/A+Vex6njP2XwFcW0A8oYx/yCvD03qAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUBhupAqkt0JAP7xC/jQGjfcNxF2cCqmpgTp2HqTjr0HxxVbV0yurcE8ElEo1S3YOecNlt4riTI7QrIVldQAC6nBC53cKRpycZKv+ic1aqI6aOzOUkT2zlqJKT4I3m7g7vI1xchbS2jGO2LRtrUdOxCnWzMOgYDGfTFFppbst+llurVbY7Yx9S9+iIvh0MksiRRWpMj95ISSNEQOFMzMNsAZY4O7eeFazXFqSS6GbqK4zzJN5Z0m75Qhi4ZNDpLN2byZLZPaBDuGCr8MhRselSXVQnHn6nNE5U9Hk5BwL2O3NzElwJogjYOk5zj8KmPG1k65Y8irGsYAU9mpGM9Scbkkb9K8Sw8hvJzPiPsMusySLcQ41MwXDZAyT5Yziujw55xPgogkMUko1DfGMD7WNetLsexaxydY9mHJNs8D3DESMEJC5BG6nrpPSvJS2xyjlLc+Tq/Ll+0seGULpCjAz+j03+FZfhmvlq4ybWMPHBa1NCqaSZL1plYUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgFAKAUBGcyuy20jIhdlAYKOp0sG2+zPyo3jljGehj4Jx9LlSVjkUqe8GU7Zzjfx6VHC2FmdrydzrlD8SPYbK3RDGtvhCWYjszuWJLHp1JJ3rpxT6nO5lT4HwcxupuIrq67HK27yRroiTUcHQW1NJjGXIzthQN8wxht4iixZa7OXj5x3+SyWrW8MjyiF1kkChisMnupnSNl6DJPzqWuLXUrtkNzZxuZsxWwnVtB2MBKPkHYMR3TjPiKral3KaVZNVGLjmRbeFxlYYlYYYRoCPUKAauIgNqgFAfLRg9QD8RQAIOmBXjWQfEFsiZ0qBnrioqdPVSmq4pfQ6lOUvxPJlqY5FAKAUAoBQCgFAKAUAoBQCgFAKAUAoBQCgBrxsHgNMg9r0CgFAKAUAoBQCgFAKAUAoBQCgFAKA8zXjYAavFJM9we10eCgFAf/2Q==');
      background-size: cover;
      background-position: center;
    }

    .movie-card {
      background-color: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(10px);
    }

    .location-card {
      background-color: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
    }

    .location-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
    }

    .rating-stars i {
      color: #facc15;
    }

    .seat-available {
      background-color: #10b981;
    }

    .seat-limited {
      background-color: #f59e0b;
    }

    .seat-sold {
      background-color: #ef4444;
    }

    .btn-book {
      transition: all 0.3s ease;
    }

    .btn-book:hover {
      transform: translateY(-2px);
    }

    input:focus {
      outline: none;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="bg-slate-900 py-4 px-6 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-2xl font-['Pacifico'] text-white">Movies</div>
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-white hover:text-primary transition-colors">Home</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Movies</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Theaters</a>
        <a href="#" class="text-white hover:text-primary transition-colors">About</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Contact</a>
      </div>
      <div class="flex items-center space-x-4">
        <div class="relative">
          <input type="text" placeholder="Search movies..."
            class="bg-slate-800 text-white px-4 py-2 rounded-full text-sm border-none w-40 md:w-64" />
          <div class="absolute right-3 top-2.5 w-5 h-5 flex items-center justify-center">
            <i class="ri-search-line text-gray-400"></i>
          </div>
        </div>
        <button class="bg-primary hover:bg-blue-600 text-white px-4 py-2 !rounded-button whitespace-nowrap">
          Sign In
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="movie-hero min-h-[70vh] flex items-center">
    <div class="container mx-auto px-6 py-20 w-full">
      <div class="max-w-3xl">
        <span class="inline-block px-3 py-1 bg-primary !rounded-button text-white text-sm font-medium mb-4">Now
          Showing</span>
        <h1 class="text-5xl md:text-7xl font-bold mb-4 text-white">
          Gifted Hands
        </h1>
        <div class="flex items-center space-x-4 mb-6">
          <span class="text-gray-300">2025</span>
          <span class="px-2 py-1 bg-slate-700 rounded text-xs text-white">PG-13</span>
          <span class="text-gray-300">2h 46m</span>
          <div class="rating-stars flex">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            <span class="ml-1 text-white">4.5</span>
          </div>
        </div>
        <p class="text-lg text-gray-300 mb-8 max-w-2xl">
          "Lolo and the Kid" is a 2024 Filipino drama film that tells the story of a grandfather (Lolo) and his grandson
          (Kid) who live on the streets and survive by preying on wealthy individuals. The film explores their complex
          relationship, their journey through deception, and eventually, Lolo's decision to provide Kid with a better
          life.
        </p>
        <div class="flex flex-wrap gap-4">
          <button
            class="bg-primary hover:bg-blue-600 text-white px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap btn-book">
            <i class="ri-ticket-2-line"></i>
            <span>Location: Room 111</span>
          </button>
          <button
            class="bg-transparent border border-white text-white hover:bg-white hover:text-slate-900 px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap transition-colors">
            <i class="ri-play-circle-line"></i>
            <span>Watch Trailer</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Movie Details -->
  <section class="py-16 px-6 bg-slate-900">
    <div class="container mx-auto">
      <div class="movie-card rounded-xl overflow-hidden shadow-2xl mb-16">
        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 relative">
            <img
              src="https://www.affirmfilms.com/wp-content/uploads/POSTER-giftedhands-387x580.jpg"
              alt="Lolo and The Kid" class="w-full h-full object-cover object-top" />
          </div>
          <div class="md:w-2/3 p-8">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h2 class="text-3xl font-bold mb-2">Lolo and The Kid</h2>
                <div class="flex flex-wrap gap-2 mb-4">
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Sci-Fi</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Adventure</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Drama</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Action</span>
                </div>
              </div>
              <div class="flex space-x-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                  <i class="ri-heart-line text-white"></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                  <i class="ri-share-line text-white"></i>
                </button>
              </div>
            </div>

            <div class="mb-6">
              <h3 class="text-xl font-semibold mb-3">Synopsis</h3>
              <p class="text-gray-300 mb-4">
"Gifted Hands: The Ben Carson Story" is an autobiography by Dr. Ben Carson that details his remarkable journey from a struggling, angry young boy to a world-renowned neurosurgeon. It's a story of overcoming adversity, the importance of faith and determination, and the transformative power of education and a supportive parent. 
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Director</h4>
                <p>Thomas Carter</p>
              </div>
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Release Date</h4>
                <p>March 15, 2025</p>
              </div>
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Runtime</h4>
                <p>1 hours 26 minutes</p>
              </div>
            </div>

            <div class="mb-8">
              <h3 class="text-xl font-semibold mb-3">Cast</h3>
              <div class="flex flex-wrap gap-4">
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Cuba Gooding Jr" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Cuba Gooding Jr</span>
                </div>
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Kimberly Elise" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Kimberly Elise</span>
                </div>
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Aunjanue Ellis-Taylor" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Aunjanue Ellis-Taylor</span>
                </div>
              </div>
            </div>

            <div class="flex flex-wrap gap-4">
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-imdb-fill text-yellow-400 ri-lg"></i>
                </div>
                <span>8.9/10</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-movie-fill text-red-500 ri-lg"></i>
                </div>
                <span>94%</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-user-voice-fill text-blue-400 ri-lg"></i>
                </div>
                <span>4.5/5</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 px-6 bg-slate-800">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-8">Gallery</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="rounded-xl overflow-hidden h-60">
          <img src="data:image/jpeg;base64,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"
            alt="Dune Scene 1"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img
            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSExMWFhUVGB0aGRgYFRcYHxoXGxcaGBoaGBodHSggHhslHRcYIjEiJSkuLi4uGCAzODMtNygtLisBCgoKDg0OGxAQGy8mICYvLS0vLS0tLS0tLS0tLS0tLS8tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAQwAvAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgAEAgMHCAH/xABNEAACAQIDBQUEBgUICQMFAAABAgMAEQQSIQUGEzFBIlFhcYEHMpGhFCNCscHRUmJykvAXJDM0c4KTshUWQ1Njg6Lh8USz0jVUZLTC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAQBAgMFBv/EAC0RAAIBAwMDAwIGAwAAAAAAAAABAgMRIQQSMRNBUQUUcYGRIiMyQmHwFWKx/9oADAMBAAIRAxEAPwDuNeU/aJjTNtHEuTf60qLCwsvZH3V6rNeQ94mJxeIub3mk1/vmqyLxLW7OGzSDTS/3V0/AQXtSPuZBe7dK6Dswi9cvUO8zsadbaYWgiFhV8xjL31pjv0HxNZSzkC1VVkijbbFzHQgEm1vClvaB1sBTVi4WZj3UtY+K12vWceRtPAv42PSlLHQ2a1OGIal3bEet6eouzOfqVc17KdlcWOvwtr/Br0v7OMUJMDH3qSCO43vb515m2bKLgHv52uehr0F7IdIJQGuMwI15XUE/M1uv1icv0D/UqVK3MCVKlSgCVKlSgCVKlSgCVKlSgCVKlSgD4RXkbeiAx43EJrpM49M5tXrqvOvtu2NwcfxhynXNoDzByn15H1qsi8OS1u3hgsajvFMeHygi8gGvK4oNh4S0dkdQQBrc6fAE3rW2GwkS2xGLGbuUte/la5rk7d0rs7Up7Y2Q8QzJy4gPkQdKhlUg9q5H8fhXJPpcCOTBPc3687fAa06bBlLJmJzm19O6pnHaUglIMbQxCdntc/G1KW1JYze8i+Waqe1sQGYrxBGAdS1+vcACTQlcBhjdjJLKBf3YHC6DMe0e4C/KrQpXyE6mzCN+IliHJtaF4kBq1Tph21jkIvyDBh8yK2YYWA0uBz7redbqNheU3IC4NO2VI1OnlXpD2T4ZlwrMwtmfTyAAvauJSYFY8THdf6Tt2sdFOigXF+QLEm3Mcq9A7iZ/oEd/eBcC/hIwF7eA6VvF3mKTVofUZK+Mbamq313/AA/+qg+9wk+iPmy+IW/aGUi2viQfStm7K5nTjvko+RgLjv58vGsqUZcPjXaNyqHhsSB2Rfly7R0K8r2IN/C9ovtG5AWLnodLWvINdb8uGf4Nq7v4NXQ/2X3GSquAxZdM7xtEcxGVyt9GIU6EjtAAjz76E4V8dnGZUKW65QQbPbNYkcwl7d/nQ/bT4k8EyKgbidkBrrm4qZGI7gNL35tQ5YIjQvK25fcb8wvbrX2lNMLjuMJrLfJk7WXQHOdQGtocnLmPWt3E2j1ROWtspP2NFu1rgFxrobeVG7+CXQ8SX3GapQbZjYvMwmCZcvZI07WnPUm2pH93xoh9b/w/+qrJ3MZx2u1/sWalaoc/2svpf8a21JUlcw9uGEvHhJjHnWOazqbgFWANiRqNVrp9K/tLw4fZ09/sqGHgVYG9VlwWh+pHL4UJSy9kG+gv2bnkOtVcLu5EEdXBJaxD2OZSDcZWHLxo7goxfXkflR/DwqBp+NciNSSeDtzUbWaOexbvjKIRFdM+csVs1yLe8dbDwpl2CGMTrbsdoAE2FgcoNupJDHXvoltKQKMq6u3IfjVrD4S0Ry9BrRKpKWCsYxWTmG19nrnsAct9bfpd1+htRydBLhlg4QMaHMoAGhsRfob6m9++q+2YTxDkW5PP/vW7ZeK0PZKuujDQ28/Cr73tRZ01d3FzHbJuAuVrLyv0v3VnDglChWW+opxOJTLcrr6UFJ4s8caLoXHrqLkmrwqN4ZlOEYq5u9qYSDFtkFmWOI+eYkc78+yK7DuLm+gYdm5sgY/3tfxrnu9ezkxW0pIffYxRgKb2DElVbQ/ZzFtf0a6ji8RHhMM0jaRQRkn9lF++wp2mstnPqv8ACkX6G7dwkkqKsYjPbUuJASCgvmAt9rl86DYTYUuLVZsbNMpcBlw8MzwpEDqFZoyHkcAi5LWuNAKI7J2I+HlJTEyvAV/opWMpV7izJKxz5bXurX6Wt12F07GOGgx4yh5YDYJmKxsLnN9ZZSTYZb21525dfjJtCy2bDg5Tm98jNw7KRoNOJckaaHnVfdfEM2L2krMxVMQgUEkhQcNCSFHQXJNh30O3W3fWfDLLJiMWXkaRmIxc6/7VgAFVwAAAAAB0oAPCHG8JhxYeKTHlPDYqosvFutwTc57C/wCj40PxWA2gzZi2FJXOYyVfQl0Md/JAwPjlNXMJuvDGsq8TEMJkyNnxUzkDX3CzXQ68xY0B25u5FB9GWObFrxcSkZ/nuJN1KsxGshtcL0oJTsGlh2jreTDgfWWsjk+99Tz7l0bvOorcsWO1JeDm1gFYjLxAVv1uEuD0uAetYvsdII53jeckxMO3iJpALKSCodjY+IoTu1upA+Dw7u2JZnhjZicZihdmQEnSWw1PIUEBzZceMz3neEplXSNWvnsc1yfs8rWA5HvsC1K28uzEh2fJFEZFUvHc8WUtZpow1nLFxpfka3PufEvahmxUL9GXFTOB5pKzofVaAGOpQnd7HvIJYprcbDycNyosG7KujqOgZHU26HMOlFqAJS77QsKZNnYlRe4QsLczls1vW1qYq+MKGCONbMmBUX7hR5cWLWHOgm2sFwcXLFyGbMv7LdoW+NvSq8mI4RuxsBrc91cScXGTR34tTimEsbiTArYgxtITplUXIH/mgTb0YnKzHDOiHlr9451uw28jzHhYdeY9491W/oIAAkmDuDqMwq6ilyiu6/AojeKSMkvATfl2lB9R0qvhtpM2I4oQqLAHx1oxvRs/Cu2YSWe+oFyB6ilLHK8d2SQEDx/Ct4xjLhGUpzjmXA8z4pWW4trWrdfFqmNjLDQ3A8CRp8/vpW2NtbiEKRYnQ9xNuYq9CxGIjtzDj5GojBwlYKlRThg6zujsh32hPjG0TKqpYjtHLZrjuFqaN69mticFiMOps0sTopP6RU2v4XtU3Yith1P6Xa9Dy+Qq7tLFcKGSW1+GjPa9r5VLWv6U/BWRypu7FzBb2YaaHhTYgYPE5MrpIyRSRvaxKCQWYA6hgCp0obsjGOdoQR4bHzYyEJL9IJ4LxoQF4Y4kUagOST2bk2FOOGCTxRyPGpzorWYBrZlBtqPGqrY/h4yLCKihJIJZbjQho3hW1hpYiX5VcoDt1D/PNqD/APJjPxwkFCtzdhvLg0kGOxaBmkIVGhCqOM4soMRNvMmjm9W3PoSh48OZpJGuUSwYxxrmkkJtc5UGg6kqOtGcAI+GvCCiMi65AAuU6gi2lje/rQBU2Nst4M2fFT4jNa3G4XZtf3eHGvO/W/IUP3xcA4Ik/wDrYgPElJB+Nbdm7zxy4zE4IqUkw5W1zpIrRq5K+K5gCPEHrVjerGiDCTYnhrIYEaVVb9JVJFj0PiO+gC5tQfUy/wBm3+U0hbtJgTgsKX2nIjGCMlTtApY8NbjLmFrHS1tKa9u7SxEbYeKCOJ5JiwPEdkVQsZc6qrE8rcqFCY4ftYzZ2Hjiv2poCsqpf7UitGjqvewDAczYAmgCbdaJNmTNFiDMgZDxGmEtrSxkgvfkO7pRfaG9mBhUs+LhHcBIrMT3Kiksx8AL1htjFpAqYeHDLM8+bLCuRFKqAXdyRYIMygmxN2UWN6H4M4iFlZtlQLdgM2GljdlBNsxDRx6DrYk0AWdzI5X+kYuVGjOKlzpGwsyQoixx5x0ZguYjpmt0pjr7UoAlfDXMovaVLiWk+jwhIohd5H7R8lUWANgTck29ap7Y3gxDnWRitxoLAcxbQWvTMdLNmMq0UX/aoY0eGdXXPqjLfUrzDehNv7wpF3mxKyQIb6Z1DW6qe/wqnid6XxWIaEhSiXu1hqQbADuUXbz9BVPaCNGjKRmjYaHuPS/51yasPzM8nXoSfSv2DOE2NKqMY5ioY3sFHLu01+dWhswBLSYx08lQD0vrQjd7epSoSTRhpRPFYtH1BuP45Vi9ylkbpTjtwUMZs7DBTllkkbxcKPgopek2WC3U+ZJozj8Wi+FBcbttFBCDWtY7nwZVpQtkxzATqBpk1uKZt0cH9IxcY6FwL/efhekfAsbmQ9a6L7H14u0E/RiRmHnyufjWmzIpv/CzvcaBQAOQFh5Cqe3jbDTk9IpP8hq/WnG4cSRvGdA6lT5MCPxpoTFjYG18UMLhx/o+ZrQxgHjYbXsDXWS4rDC46STasIlw7QsMJMVDPG9wZsPe2Rja1hz76Z9mYXhQxxFs3DRUzWtmyqFvbpe16rTbJU4tMXmIZIXiC6WId43J8wYx8TQArx7zYP8A0jiZJ8REn0dRho1dgDc2lnYDuJMaecRr7uRt3DjES4CGZJIrcXDZT7sZJ4kP/LaxH6rgfZpo2FstcNCsKsWsWLOwF3d2Lu7WFrlmJ9a17c2OuI4RzGOSGRZI3ABKkaMLdVZCykdzUAL2B2SMRNtMFijri42ikX3o5FwcGV17+diDowJB0Na949u8TZ2PgmAjxUOGkLx9GXIbSxH7UbW8wdDqKatnbNEUuIkDEnESLIQfskRJFYekYPrQ/e/dSDHxhZCyOp7MiGzAH308UYaFTofQUAZ7Xb+dYDxeX/8AXc/hRLa00aQSvKQI1Ri5PLKFN7+lU9ubJaYwvHMYZIWLK2RXBzI0ZBU+DfKh826rzlfpmLkxEakNwQiRRswNwZAozOARfKWt4UAaNj7JlmwGBk4rQYqLDoBJlVzZkTOkitoVbKtxobqCCLVniE2rAjSmfCzhFLGP6O8JYAXIV+MwU6cypFE9sbHaV0lixMsEiAgFMrKykgkPG4Knlz0I6Gqc+wMVMpjnxxaJhZligWJmU81L5mIBGhy2OuhFAF3Yk8UzHExyu3Hiifhl7hEKlkIj+yWDanrl8KL1Xw+CjQ5kjRSVVSQoBKroqk87C5sOl6sUAcHw0fD2a7Wy5l1tpe5A+69U/aBtUQwKq6PMot4AABj+A862b67WSLDrg0sWew8lBBJpA29tFsZiL/ZVVRB3IvX1N29a6dao0rLlidOF3dl3c/CEAzEaM2Uf3dT94+FPCJ2bEXB5iqm7mzP5rIg5owcfDX5H5URw6XFcH1Ck6VTJ3vT6qnTEveHd4huJh+XVO7xF/uoGMfKlg1xboRXSMXh+6gOPhXUOB8L1lTrXVnkvU06veLsJuJxJbmSawhgzanQffRWaFb9kD4VqKUyp4wKOGcmrNc25Ach3U5+z7HNh5ldGtJLmVCeV1UvZh1U2tbnytralIJatmM2wYhh+FpJFJxL26jLlFuo5386iOWEsRPUW728MWKjVlYByO1HcXVhow8QDfUUYryLs/asyMZFcgls2htZrg3W3I6Cuybn+1QMqR4oHPmClwBax+0bdb86bVKdrsUc43sdWqhtDZiykMSQQpUEaEBrcjzB0+Zq8rX1FfaoWTad0BYt31VZVzueKgUk2JFha4NaRuuliOLJrl1uAeyhQa91jypgqVXajTr1PIJxmxRIXPEdeJa9rXGW1grWuBoDbvv31p/1cW5biSXLlzqOZBBt3e956UcrRjcQI43kIJCKzEDmQoJ0+FTtRCqzSsmDcHsBY3Rw7kpfS4Cm+b7IFvt9O7xNYDdxMtszX7ViQvJnD2Omo0tY8wx761DeY/wC4b99K14je1Y0aR48iKLlmkQADxJqLRJ6s+blmHduNSTnc3yc2/QAHToQCD5mjgpR2fv5BPm4OWTLbNkmRrZjYXA8auHej/gt++tThFZTlLkYqlD9jbTE6s2QrlbLYkH7KvcW6WcUQqSh49x+KaWR5T1Nh/HlejPs82UJ2nJ/Qsp7ib/8AatGA2eDAWtqIpn9VhNvvo17K7qxPQ6fKnopurnshaTShjyM+70xDXtYMtrfrqbEff8K3TQcN9PdOq+Xd6flWAgyYiVOVzxFPnzt/eHzolJHnTx+4j8DUa/T9enjlF9FX6NTPDBcx0pd2lACaOzPYXoRi0DV5qKsz0csoXsTAB1qu0VtaMts/rQfaL2OUUzF3wLTjbJUkeg2Ke7fKi+KWy6c6G4rDlSl+ZGa3mTb7qapLuJVn2CeEjugNE8JHYAdSbD4XNVdkR3UCihi+sC9VS5/aau3CGEcqc8tHUd1PaHkMGGxI7LIAJe45mQZ/CyjWunqb615sx8NpIv7O3qHY/iPjXStxN7RGi4edtAQEY9Ael/ClK1D90TanV7M6VUrFGBFwbg1lSgwSqG8H9VxH9jJ/kNX6H7wf1XEf2Mn+Q0Acm2rCgLEoLhjfTrekDftS6wlFOQFgbXtm0tceV6f99yyrOFF25AeYB+4mk/B4SeaMrlIJsHHI5edgOeo1Ppzpa9pXNYx3YKe4mxJlxUUrKVjv2wTzT9ZeovrY93hXZSLgW7tKTt3NnlIypXJ27KO0Oza9jc8tCbG3zpiw07KtsikXv71vhpU7r8kyikOO6Iskw/4o/wDYho9QDc6TMkrEWvKNL3/2EIo/W64MTzdseEFYV/3hkj9Gw8v4gVU9mOJFwnW9V4NvxQnDhrnhsztYX14Toq+ZLegpW2VtWTDycWKwa99RcW7jTsqqjWb7WsLRpuVOx27b65Skw/2bWb9htD8DY+lfWxVtB1pc3S3qjxoaCUBJGB06MLa5fEd1EtlzXTLcXQlWPeV0+61OU2pRwLzTi8lPHsVkKnk4zDz5MPuPqarQ4a5N72q9t4XTOOcZzenJvlf4VjhJgygivO+o0ulVuuHk9F6dV6tJJ8rAM2zII0svvGl3CYEuczU0YjCGVjfkK+yYS1lHWk4Tthcjc6d8vgXsPsrMSz6InzPdQHHfWYkgagGwv3L/AODTtt6QRx5ByUXP8eJpX3MwJmxFzqF1Y+v4/jXoIUOnGFN8vLPPVK2+UprhYQa2Pge2QRpYG3dc3+4Vs2YvEkkfoz2HkKs4ibhw4iY+8z5F87WFvIE1c3ZwOVI/G5Pw/wC9dIQfBo27DlkjbpqP4+FW4Y7C9W94sLeLMPskH4c6+4GPMimqEjJuhvG8OWOS5j6k9O61dLhlDAMDcEXFcdyDmdFXnTV7P96RKGiYWCkBGv73T06UjqKX7kNUal8Me6H7wf1XEf2Mn+Q1fqht8fzXEf2Mn+Q0oMnFfadtDJO8YBzBUY6gCzKAPHmKJ4RZgzSmG1wSNSP1Qw115UD3t35wckrqcPKJEbKWMULXydnQlg1ja/rW/A7+YVgUEeJFwDciPkOQ9+sZx7mtN2CrTYhmVggBTQEqBp+sSxNuXShu2N5pcPKYTGrgEC47NrgMW5n9LlV6He+Ac0ms1vsJyAHIFrcxTDuV9E2isrJDYxvkYyIl2Nr30J6EfCqRV+GXm/KGP2fyFsO7Na5kF7Xt/Qxcr0z0E3YgRBOiWyrMAMtrf0EXK1GqYimlkwfODyFjsIGmgQCweKNj4s92Y/h6U44LdeMHVRalVZLS4Z21yFoj5IxZf+mRfhXSMPicw8K6OlirPzcSrt3Rz3efZ30PEJJDoPfXwdT2h5EWPxp1wmJVpA4H1cyCQftH3qFb04IyI5AuYvrB4ge8PgTVHdvFfzYqfew0nL9Rzcel71pSWys49nkpUe6mpeBvaYHS2h0oNsslGeI/YNh5c1+Rovm6kgDpQfazZZElHJuyfMaj8fhS/q1DfR3LlDfpdfZW2vuGIyFXxr4TbXS5+6rEWBcwPOVIijUszHQadB3k8qGQDMC7WHX0rmej6Rzn1Z8Lj5Oh6tq1CHSjy+fgX99MTljy9W1PkDp8/wDLRPdHBLhcGcRJo0mtuuX7Iob9C+m4yODXKBxZT3JYcNPC6m//ADD3Vf35x2eRcOmirzt/HdXZg99Rz+iONJbYKH3BWGMmMmBbSNWuF8e/zroUEGXQfZX7z/2oTuxswIo0o9i5VjVmY2FwPw++mHjBhe+TCKMOhU630oXsFCM8R5oxHp0ons43uByOtffowSVpOjAX8xVWTa4C3zxZSNYU0aY28l6n7h618wDCLIlyALXt1Nw3PvuKGYjEifFvJzWPsL4kc7ev3UVEOQNI/Pn+z4D9Y1W10WvZ4Ov7rbTM8JLCzKxU+XNT8D8qtbf/AKrP/Yyf5DS3uHjeyA2jOq6eWYD/ACmmTb/9Vn/sZP8AIa5c1aTR0Iu6PP28WCgdcTPkAaJtQQhDgyZMwsbhgXXv0NDdh7KQYcTMCSyHtA+41lKXGaxBJsRa9XpccjHE4eWMSBpWIu5TKczAOXFtAbadazx2Emw8SiMDgSOyBonMguoByG/aBuGN+ttOVZujJ4bsaqpFZSvgy2ZAWwmVVYkSWPZ5HUXJ9OfjTFueJMIjQ3BWeUs9iV0K2C5hrbTmKSdn4l4gZFYrkIIINtTdgR52pq21tInIYyFZ1DMMpFjpqp5WOvLlrWkdG72Tyyj1Kbu1g61ueihJgt8vFFr93Ah/i9H6UfZniDJhWcm5aTU/8qIU3VW1sEXT4PIeMXsOeqOkg8mBjb5hKf8AYMwaJW8KC7L3fTEEZyeTLYEi5I7F7dzhfnRLdjDERKO6unTjtqSX1EJvdBMLqim9xo2noedI+ztlTwSS5l+rZJEJvz4YDK3wy/OneU2rLa6gwZx9nmf1T2CPg9/7tWqKzUvDCm8OIOw4DRoxtdlHj8KIQSRxvGZFVlVgWVgGFutwe7n6UD2HO3DZAe0mnPpW55W+0D6A2ptwU1Zi+5xd0M2/m98E+H+i4c5gSMzAWXKNQq+tvhSKdoARZH0WMZnI6oNAvmxIX1J6VimAUX6G5sb205j5Hr3GtWE2bx50w59xbT4nwH+yiPjY3I73PdSlSKo01Thy/wCs3g3Vm5y4Q0bnYfhxNI/9YxN5n/VQ+4vgAOnjS1syPjYp3OutNGyMRbD4nFHmxa3kBZQPChO4+EJu/eavCKgrLsVnJyz5HTAQWA8KB7ak42KiwwPZXtP99MmImEcZY9BSjugDLPJO3X+PyqY95FZdkOUUYUWHKgW9W0ODC7fatZfM6CjztYVzrb2JOJxaxLqsZvYdWP5fjVErly1u1s/Ko0ux/g/+au4uRWcgn6uLVz0L9FHea3SExjgRn6wgcR+ka9w/WPQepqjLGLKoFlX3V7yebN3mr/BUO7uY45nmPZCmMgdyoS3z1v5mun7XmD4OZhyMLkfuGuVSHgYWVzzugt3nMDby1FN26OLMmxXJNyscyk+jH7iK5+ojm47SlhI4DtvHqrYqLhjO0p+sJOYBZcwCjkAbUb9nW2njSZbqVULIFdM4zI4JIFtCVDC/iKPbdxuJjkyxtIzSyMFu75VANyTY8gKP7p/S2YwztqVzo6SMQwBAYMpN1tmBHfrSV1KVu43tcY7rYEzZjYLFSvZ+znz8NVy9m9+GhOhC3YA2HIUb3h2jBi0cwMVMC9mMrYGNVtYG/PKL8tdaIb44rERuuGgezshd3Z27KXKgKAdSbHW+lqpQY6aBmiMzyZQGD5n7QYd1zYhgR8Kv1JRndy4K7E4YWDoHskxJkwAkIALFTZRYD6mIaDu0p1pS9mk7vhC8gIcydoG978KMa38qbakozz7sVyhIv5VcwjhZpUFgCc6/suM4Hpe3pVYKAT86+SSgNHJp2SYz+ybshPrnHoK7FTElL6HOhmLX1CWKlHIi9+tYRXKtCT2JLgHuzArr+9VDaGPUrlHxoVDtNuQOq638BUyjeLREXaSZX3exNpWB6gA+Y50wzk5lC9b2A0vpr/3PT4CldiI8fOvJVkbXkAL31PrTdBhJj9emGxJUi2cRNyHcpsSvkLGiFeKgnJ2CpSe9pIGbRxCxRMXAYKA7+Oto4/7zC1u4OaGbpcRYsTiZHP1iu7eLW5/9VVd6VklkWJWVlJ4r5b9lj2EVweRVRy73amLamG4Oz+GBZpCifvML1jTbnN1HxwjSS2xUF8syxBKbKQdZLfPX8KNbpYbJCKH71w5YIIx0IHwFHtlraMeVbvgx7gfffGkRhB9o/Kr26GEyQA9TS1vLJxMUsf6NvzNPOBTKijuFEsQsCzK5S3k2gIYWcnkKR90MPK2aUWUsSS7clv8AeR3cu/urdvxjxNiFw2YhV1e2vkNKM7H2ULDKrWA0aRRp5B2P3VWK7lm7YN84jhjsGFjqWJuWY8yTWnZ6AnjSaIOV+bHpbwrTj5MOkmZiZZByLsCB5KAFHwqriMTxjq3LkBy9Kt2K9whvJis+GNuXEUXtobZifnYDypk9nExOzMYn6KuR6xH8qQcfiBw5EBNlZUFuRZbs/nZmtfwFOm4bZMPiYupwrufUED5ffSdVflsbg/xoX9ubW4c7Z2DqpYJp7qtzBsL6WPfypo3FljCvimAQZcq9qwEagFmyu3ZFwNetr0kbReKWSQNfMkrLysTZtCO8EfjSzvZtcF3ijJy2Ib9s87d+mlYeyjBuo38DT1TlDppfI57/AG+eAnli4BMkyNlzgEJluDbN9rXuuNTVWPafCjMxVBEkiqCqk9pgzcieYIOmvSuXRgU8ba2m8mzVSRizGVJLnrmVwx+J+6seip3l4JVXbFQO8ez3FpLh2kjbMjuCGsRf6mLoRca00Uh+xX/6YnmP/bjp8qCp5zxj2Fr1RXGAnhsbI4yk9xJurejAel6+Y/Ei5HOhrDW5rtVEpR2nLg7O5uzFbodGB7V++q8MWcsATrp6VaZeKo/3ii37Sjkf2gPjRTd/BhWzuOzGM7eh7K+bNZQO8+FZRqfhe7lcmrhZ47jduRu1HPtPETSKGWElsp1BkLsqE94UITbvIPSuqTi1cu9nO3o4cU8bv/TKoZiLKJASVuf1szfKutTAEVyal7j0ODjftgwa4eWDGxgAykxSryzjQgnx8fChWPxYnODT/i3YHuRDa/xHwrP2rbcXHYqLB4ZgyQMS7j3TMdAgPWwGvifCqckOSPDT9YpMreAfsm/kyqPWuhpL9PPkVr234D28cOcJ4Ner0UwSMkmwA/Cq+0ZB6WvSbtzbhe8ansjn401a6F7ZwbtjkzYtn7yf4+FO+0MaIoXkJsAPupV3Ow1gXq/txxNPFgweyBnk/ZHIHzNTPsiI9wHsPB574nKHmkJJzsQFHQWHOik8GLk7LSBR+igt8+dHEwcagBVAA5DpWxGVegoulwRl8gLCbtBdW+dU9u49IRw4rZzytbTxq1trbLMSkflel84XJ2jq7VWTbLxSTPmEgLFYxrYgepPaPx+6ugbixGXEYlAbCSGSNTzAUWRfgLUm7KsjozclYE+QNzXS9yNnLHiRJEc0ToSt+YuL2PwFL18Rsb0su5VxPsvZ3eTiqGckmxOhPddaDt7DUPOc6/rH/wCFdlqUlKpKXLGVFLg4wPYUn++P7x/+FXZ/Y5miSIzaJyOY3troex411qpVVJrglpMX9yd3jgcN9HzBgGuDryyqtj3ns/OmCpUqCTyq73N6fNibZ2VFgVGJijeUM2YGHO5udCDa9rW60hQRFzYUz4TYy5LEAnvrsVaSqLmxzYT2PyBRjkK9mDKByu5v56AVYwckjKVJ0JvrbmBYG9r3AJF+etWpMHGt9a+7PjzGrLTweZK/yVdeV7LHwa12YH7JGnSruI3fmIVWxU4gGrpxpMpUD3bZra8vWjeFw4GtadvT3hYX94gD43/ConGMsNExlKObixjo4onhSBQoBvoQdT1NHMYglgnW+XOubl7sqdo8tbHKD6GgeCiTPcjteNHVdQua9rWuLgXUm2ove1yBccr0VLRg74Cm3OSsL2O24JIVEbFtLHT7rE3oZhsA5K3GXMftGx+HP5US29IxlReIyIl7Zel7aX9BRPY2CguGMrM362lUpObV5mtTbF2gFtnyJEnfl00H2unOgu72LtjJAe0zgln68+yo7gAD8aNYtIkQlpLC+blck+GtLG5ULSzSTAkBm05e705iqajUQordInT6edW6iPLtahmKmqxjgw5Ofgv5UvY7EuPtn4L+VKL1Si/I3/i61r4NjzW5L61jg9nSzuMiE3Nr8gL95oDiZnJ1dj62+6nr2NyyPjmDSOypCxys7EA5lAsCbdaiWvUsRRHsXFXkxj2b7MTb6+Yfsot/mfypx2Nu9FhguQuctwMxvYHyAoxUqk6sp8sI04x4JUqVKzLkqVKlAEqVKlAHAtmbKEYBPOrONxYRdBc0Fxu3SbhaqxQyzdrJcd5Nq9AoeTjSnjBalYuFvbU3sO7lRfBQWtVbAYHqRYdPIUYWOwvUTl2JhHuzEuaHbZxHJbjTX16ffVtpdbnpr8KAzy5jy5t+NViu5aTD8ezzkVhGGbKPs8726/GtOKgJF+ARYnLcXsevSm+dEAVTp2FHJv0R1ApdwEjXlEy5frDkuGN1sAOmnKuS9Rd5R0o0rcMCSYPUZlIueR6jrWP+gBfssV8KNbSAM8ajkIc3K3vO35VclyopZtABzrowqbopsSnDbJpCVvZh2iiSPMS8hyj8/hTZuxsoQQgW1trQLZKDF4g4kr9WnZiB625t+VNxk0rznqOo6lTauEeg0FDp07vlgvar0q496PbWl50s42Sk6aOhN2iUJmrqfsMwGuIxB/VjHzZv/wCa5M7a13zdDDnAbJWTKC5XisGOUXci2Y20AW3wp6lHJzK8sDtVTamOEMZkIJ1VQBYXZ2CLqdALsNTypam35RVF4mzixa3uGMy8POjtlBBHaBNgQRVmbe7DssgMcrKobODGtsqjXMGOl7gZTrqDaxBpkTLMO92FIXNJlZmCWyuQHP2cwW1x17tL2qDe7DMjtG5cpC81gji8aEgm7AAXKkC/OhP+nYThpXXCoBEVZA4WNSjNkV1PRwobTQ6ADmKobIxuAgNxhpFc54VUZ3DxcSTL2WbUHKdCLgnlbWgBqxW9OEjYrJMqlQpa4ayhrZbsBbW469R3isY96MOwkIY3jRpLWIJjXTMLgDU2Fueoqnh9q4VVidYVijlZo7vEIT2AWChSATdwQB33tfrVXejCshkTDSFnjYgthyAyjMWV3AIAORtDrpyvpQAw7C2qmKhWZAQGvdTzVgbMreIIII6EWOtEKG7AxUMkWaBAiBmXKFC2KsVOg05iiVAHkjCbZgvd2NvBTR//AFzwoXKt/wB1q5pUpr3dQw9vDk6jHv1hgLXP7jflWEu/cB6n90/lXMaMbubCOKMgEgThJnPYeRiMwXsogLEC9yQNBrVfczJ6EBnxe+UZFlJ1/VNUY95Y8yknQEclPIGg8+7OJAiKxM/FhEwyKxshJGunPTp3itcG7mKbKeBKFIDZjG9gjcnNhfKRqO+2l6t7uoR7eB03E+0zDlrjUchdX7h4edDZvaPGze6LX55CfXn5/GkWfdzFKdIJWUuY1YRuA7AsOzcA65W5joe41ngt3pC8qzH6OsChpWkVrqGICjIBmLMWFh68qUsMJ2HR9+oDMHJNhGq+4eYJJ09aF7075idRFGSFPvGxGnWlp9jMZMsTcaMkgSoj5bBVZ7hgCCoYFh0+dWNpbrYqKd4BDK5QvYiNu2iOVLqO69viK260tu0z6cd24btn754aJFRSQFFvcP5VZk3/AMOep/db8qSNj7v8WPivMIlZykf1ckjO6qGayopOVQy3Pj1qmNiYkqrCCUq7ZUIjazNciy6anQ/A91JPSwY77uoN2L3vhbqf3TQmfb6Hqfgap7P3XxEjujRSRiJXZ2aNrLliaUBu7MF0/aBrTjd3MTGW+pkZFfJnEUgUtmygDMoN82liL30qVp4IiWrqPkuYPasXEXOSEzDMbE9m+vyrta+2nAgWDNYaD6t+XwrgY2PKs8eHkQxPIygBwRYOQA1u7Wvm1djywE8RGC5mVXKkB8psSpPMVrGKjwYSm5cnfv5a8D+k3+G/5VP5a8D+k3+G/wCVcETd7Fkqow0xLrmUcNtVuBcacu0v7w76+bE2S0+JTDHsFms1xYqFuXuO8AHTwqW0ldkJXO+fy14H9Jv8N/yqfy14H9Jv8N/yrmU20MdDYYDDmDD2GQiJHeRSQoeRmBJJLDuAvatG0tnvisNJNPAsOKiTihwqoJ4gQHuq6Z1zA3AF+VZqrxf/AKW2HVP5a8D+k3+G/wCVT+WvA/pN/hv+VecalalD0f8Ay14H9Jv8N/yqfy2YH9Jv8N/yrzhUoAlSpUoAlE9hbZbCvxFjidgQVMiscrKbhlKsCD62PUGhlSgBpwO/WIiZXEcJdVCZyjXIEjSDkwA1Y6AAEcwbC1H/AFnn7Xudo4cnQ/8AplyR217uff4UEqUAOWy9/JBPxJ1UofeCrro0zrYFhcZ52uLi4AFxzqhjd474qaWGPNHOArRTAsHsF5gNcWdQVAa66AGlyrmyMeYJkmADFDex6+vQ9x6HWgA2N6p4c8X0eCO+ay8JlMfEiWJ8ozdVRdWubi99TVqP2gYpXEohgU5ncWjcDiO6vI4Oe9yVW4vlsBpVSHeeJRb6IkhBJDSsJWtkyi5ZNbHUD3fC+tWI97ICVWTBQ8PMMwVVNltZsgKgA3AbS1yLGgAbsXeWbDqAqRuqvxEzhuxIRYlGRlIuAARexsNKKDfDHBVl4a6kXlMTfWKpkIjY3y5RxH90A+OlYNvTCskgXDJJC0vEVXWNbfVhCMoUj+Dpc3FDZm8zwpkCAj62ykkraVUUjKbggBDp1zmgC/iN6cWsdnw6LHlMcRaKQCMNDwGEbFtSUH2ixuL1ng9/JeOskyqUzXYILGxxC4g5btzzoPTTxqlid6mklikaPSOZ5cgc2OdgcoJBta1r6nXvq6u+ygg/RY9L8iotdlYhfq7ANl7Y1zZjbLQBX2lvNH9MGKhhVrIgCzKSA6WsyKHOQDKoC5iLA9Dahm09uyTj61Y2bKqh8pDAKztprYZi5vp0HKvu39sDEcK0SR8OMIcotcjr4DuHn30JoAZsRvviXVlyxDPfOQrXdiYiXbte99Sg0sOemtVdlbeKY8Y2RQc0rPIF00kLZwvoxtQOrWCmjW/Ej4l+XbK2+HOokrqxK5HGYYzCsr4RRPBlCRSIpkzR8RpQrgHRruQQQPxqpicS8GHfj5VnkiMMcY95Y3lMrtJroSSQKDQbUiQWWFlNtSs7i5tzsKwOOgOpw5J6njPqep5VioZ4/v3NNysC6lZORc2FhfQXvYd16xrcyJUqVKAJUqVKANuGjDMFLBQebHkB1NE12XD/APdKOX2T997X5de+g9SgBrmxSsNZoCSrqbxHqMwN83O6qB3X1HMVlFjl5mXDgubkcJjY5RoLNyFvD1sKUqlADTPiI7MTLh3IuygxXFyLkL2tL26ju8bZnEwjMOJh8pIJAw+mhNrDPrz1pTqUANgnh6thLAnTgE9LadvUkAc9NedfI8TARmDwLINf6ArplYZb5rHmOvPypUqUANryQAWD4W3MfUXPMi183P3fv6VoXg2CiWCyEWYwm5sbi5zXIOl9KWalADSZ0zW4uFcBhYvGdM12Nhc2UE2+FfYJFMa5pMHYBR2o2LDQ30PXTn5cqValADQZEF/rMIQSOyI3tzAvbS4AJOt+Rr6JIrgE4Lpc8Nh52NtOfQdKVqlADLgpVVBabDDKSwujZsxubcuWgHhWx8RE6hc2FW6XY8I+8xN7G98wFj8KVqlADViMSpDMXwTNbnwmuT/Gl/Cq2LjjkBTi4ZApFmVCpbs9bE9TY+V6XqlABHEbORVLDERsbaKM1z8tDQ6pUoAlSpUoA//Z"
            alt="Dune Scene 2"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img
            src="data:image/jpeg;base64,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"
            alt="Dune Scene 3"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUpsV7JD3yl0dPBkKLbunvMVgr3jUfwnSllA&s"
            alt="Dune Scene 4"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-slate-900 border-t border-slate-800 py-12 px-6">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <div class="text-2xl font-['Pacifico'] text-white mb-4">
            Movies
          </div>
          <p class="text-gray-400 mb-4">
            Your ultimate destination for the latest movies and showtimes.
            Experience cinema like never before.
          </p>
          <div class="flex space-x-4">
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-facebook-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-twitter-x-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-instagram-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-youtube-fill text-white"></i>
            </a>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Quick Links</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Movies</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Theaters</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Coming Soon</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Promotions</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Gift Cards</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Help & Support</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">FAQs</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Refund Policy</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Newsletter</h3>
          <p class="text-gray-400 mb-4">
            Subscribe to our newsletter for the latest updates and offers.
          </p>
          <div class="flex mb-4">
            <input type="email" placeholder="Your email address"
              class="bg-slate-800 text-white px-4 py-2 rounded-l-lg w-full border-none" />
            <button class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-r-lg whitespace-nowrap">
              Subscribe
            </button>
          </div>
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-visa-fill text-blue-400 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-mastercard-fill text-red-400 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-paypal-fill text-blue-600 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-apple-fill text-gray-400 ri-lg"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="border-t border-slate-800 mt-8 pt-8 text-center text-gray-500">
        <p>&copy; 2025 Movies. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Toggle mobile menu
      const mobileMenuButton = document.querySelector(".mobile-menu-button");
      const mobileMenu = document.querySelector(".mobile-menu");

      if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
        });
      }
    });

    document.addEventListener("DOMContentLoaded", function () {
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = this.getAttribute("href");
          if (targetId !== "#") {
            document.querySelector(targetId).scrollIntoView({
              behavior: "smooth",
            });
          }
        });
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      // Booking buttons functionality
      const bookButtons = document.querySelectorAll(".btn-book");

      bookButtons.forEach((button) => {
        button.addEventListener("click", function () {
          alert("Booking functionality will be implemented here.");
        });
      });
    });
  </script>
</body>

</html>