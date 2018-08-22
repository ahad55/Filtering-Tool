<?php
/**
 * Created by PhpStorm.
 * User: NewUser
 * Date: 6/28/2018
 * Time: 2:35 PM
 */
/**
 * @param $string
 * @return mixed
 */
$jsonstring = '{
    "PC": {
      "DefaultCategory": "Microsoft",
      "Name": {
        "text": "PC",
        "bold": "Name: ",
        "hidden": false
      },
      "test": {
        "text": "",
        "bold": "This should be hidden.",
        "hidden": true
      },
      "Link": {
        "bold": "Link: ",
        "href": "https://en.wikipedia.org/wiki/Computer",
        "alttext": "PS4 Page",
        "target": "_blank",
        "hidden": false
      },
      "Photo": {
        "src": "https://brain-images-ssl.cdn.dixons.com/2/1/10167312/u_10167312.jpg",
        "alt": "ps4",
        "hidden": false
      },
      "Category": {
        "Manufacturer": {
          "0": "HP"
        },
        "Hard_Drive": {
          "0": "SSD",
          "1": "HDD"
        },
        "hidden": false
      }
    },
    "ps4": {
      "DefaultCategory": "Sony",
      "test": {
        "text": "",
        "bold": "This should be hidden.",
        "hidden": true
      },
      "Name": {
        "text": "ps4",
        "bold": "Name: ",
        "hidden": false
      },
      "Link": {
        "bold": "Link: ",
        "href": "https://www.playstation.com/en-us/explore/ps4/",
        "alttext": "PS4 Page",
        "target": "_blank",
        "hidden": false
      },
      "Photo": {
        "src": "data:image/jpeg;base64,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",
        "alt": "ps4",
        "hidden": false
      },
      "Category": {
        "hidden": false,
        "Manufacturer": {
          "0": "Sony",
          "1": "Nintendo"
        },
        "Hard_Drive": {
          "0": "SSD"
        }
      }
    },
    "xbox": {
      "DefaultCategory": "Microsoft",
      "test": {
        "hidden": true,
        "text": "",
        "bold": "This should be hidden."
      },
      "Name": {
        "hidden": false,
        "text": "xbox",
        "bold": "Name: "
      },
      "Link": {
        "hidden": false,
        "bold": "Link: ",
        "href": "https://www.xbox.com/en-US/",
        "alttext": "Xbox Official Site",
        "target": "_blank"
      },
      "Photo": {
        "hidden": false,
        "src": "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSExAVFRUVFRcVFxcYFhgVFxYXFRUYFhYXFhUZHiggGRolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy8fHyU1LS0wNC03LS8tLSsvLSsuLS8tNzc3KysrLS0tLS03LSsrNSsrKy0uLSsvKysrKystLf/AABEIAJgBSwMBIgACEQEDEQH/xAAcAAEAAAcBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABLEAABAwIDAgsDCAgDBwUAAAABAAIRAwQSITEFQQYHEyIyUWFxgZGhQrHBFFJygpLR4fAjM2KisrPCwwhjgxUlQ0Sj4vEWc5TS0//EABgBAQEBAQEAAAAAAAAAAAAAAAABBAID/8QAIhEBAQACAgEEAwEAAAAAAAAAAAECEQMEMRIhQWEzUcEi/9oADAMBAAIRAxEAPwDuKIiAiIgIiICIiAiIgIiICIiAiIgIiICLH7b23b2lPlLisym3PDiIBeQC7CxurnQMgMyuW8IuOGoHj5LRY2mDGOu0gvBAiGOfTwQcWhfOWmiDo+2eFVtbEtfUxPGrGDE4ZTB3NMEakarEUOMa1Jh1Os3waR6On0XH/wD1BVuK5dXz5SIdBjEBpi5NrSCBunMa5hXpQdmocM7J3/MBv0mub6kR6rJ2u1qFX9XcUn/Re1x8gVwVQMIPQ6LgFttGrT/V16jPovc0eQKy9rw3vaf/ADGMdT2td6xi9UHaEXMbPjNqj9bb039rHOp+hxLOWfGPauye2rT7S0Ob+6SfRBuSLG7N29bXBilcMe4icMw6PoGD6LJICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiLTeGXGLa2BNKeVuBhmkCGkNe0lry55DSMhkDPOCDbbi4bTaXPcGgbyY7VyrhVxvtzp7PDXnKaj2mC0tMhtKRUa8OIzcwjI5Fc44U8Kbm+dNy/mS0ilBZRDmgtDm06zS0OhxkipnJzWIgkby36zm/wB5nuQXW0tp1a1TlK9VzqjoxFzsLnYQGtluKjOQHsFUIwSehJ1/VT4xRn7blCgcoZoNzDI8RReR50vBTURBhsAnMhpDXeIYaT/NhQRfS1cRGXTgCCMwQ8siQQDnVOiz+zr7laYdli6LoIIxDWCCRByI7CFhBTgkkYXEwJhrvNwovP2irqi406gJnC+GOJx9L2DLh9XpO1b1IMyXKUuVIuUMSgq4lLjUkpKCfGo41TlQlBeWV4+lUbVY7C9jg5p7R7xujeCt/wBn8ZVTLlaDHfQJYfI4p9FzPEosrEaFUdqsuH9o/pl9I/tNkebJ9YWw2W0qNYTSrMf9FwJHeBmF52+Uu60Fw6ZxEEaGYI7ig9JovOztsVzrc1j31Xn4q4sOEt3RM07qoOwuxt+y+R6IPQKLlGzONGs2BXoMqD5zCabu8gyCfJbdsvh/Y1oBqmi47qowD7ebPVBtKKWnUDgHNIIOhBkHuIUyAiIgIiICIiAiIgIiICIiAiIgIile8NBJIAAkk5AAakncEEytNp7SpW7Mdao1jc4xOAxEAuwtB6ToByGeSwW2+HFrSpVDSuKdSqGO5NoxPa54acAc5gIAJiTIXEeEN5d373PuawEkOFITUoMIYGSylU6EgEmHTLig2HhtxsVaxNG0JoU5acbsLKzgWEOa6nVGHDLvZdPNGea5uGlrd7W/6jG/3KRB8FmKWyGgAY3iNzXENPYWOLhCr0tm0mnE1gB6xzfMNgIMFQbvYPFg97rZ/vYqlOliMhuI9YDHOHef0VUHzWwii2ZwNnrgT5qYuQYYWjnCS0uA3O5x+zXZI8Hq5Fo+I3HUYiIH0HGozyhX5UpKChTt8OhAHU3Ez0acB+yj7VpBadHDOBgdPXLIB8QqsogjPbP51VtcXobkBJ8gO8qvKrbAtW8uMYBhrnAHe4ER36k+C4zymGNyvw5zy9ONqha7Ou62Ybgad55o8Jlx7wFfs4K1j0rkDuxH7ltFG8c0yI7ZaDIOoMjRVm3tMiHURvzblOcgRu6p7Fgvcyvi6Yb2rfnTUzwVqjS5B7w4fEq0uNkXVPOBUH7Ofpk4+S3Utpu6L4355/Vggd0gnwVKpSc3PKImQQe/yUna5J9k7Oc+2h0rmciIKrysrwioMOF0c8kg9oA1PdpPasQRC38XJOTH1Rt48/XjtMkqWVGV6O0UlEQJTEpgooLnZu1K1ucVGs+mdThcQD9JujvEFblsjjQuGQLimysPnN/Rv7zHNPdAWhkBQKDuex+HdlcQOW5J59mrzD3B3RJ7AZWygrzLCymyOEV1a/qa7mt+Yecz7DpA7xmg9DouccEeM35Rc0rOvRAq1cWF1M83msc8l7Dm0Q05yc92pXR0BERARFbtvqR0qsMZHntyPmguEVpX2nQYJfXpNHW57QPUrVNq8Z9lRcWs5SuRkTTAweD3EBw7WyEG7IuLcI+NK5q821aLdvzjFSofMYW90HvWHteM3alPM1mVf/cpM/thpQegUXKNg8czHEMurYsOmOkcY7yx0EDuLl0+wvadem2rSeHseJa4aEfA7iDmCEFwuN8avDJ3yl9icTKVPAXEZ8qXMbUBdGeEYojrBPVHZF5y45qZ/wBq1jJzZS3/AOW0aHLcUFpRrtf0XA9xz8lPK04uIzIntGR8vxV1Q2k9uQee52flOfkg2iUWHpbZ+czxH3FXtG/pu0d4HJBdSoFA5CgKCSoIIqBRQUVAhQDog6EZgjUHsKiVBS+6WbZO32yRk8T2jI+Sum7WpfOI8D8FgISFky6XHb7bjLl0+O+NxsB2pS+f+6VQr7bEQ0E789O8DrWGhIUx6PHPNtSdLjnndVK1055xE56dw6gNypAKIUVsxxmM1GrHGYzUWz6zpIDJgxm4NmRMidyPfVES1g73O9JaAfNT3Bw8/SMnbub7stc909aOdGfR/cHmJYSulUnuqg5uYB2tdM9QJcGnzUhqVB0niN3NDPIuJaftKdzsOfR7egO8ubLD4hUnOjPQHf0Aesl7JYfEBBI99QDnVnA7jDKfcAHNLT4PUtV7wADVeD15MxeDhhPg9JgSMgd45oPXL6eKmfFoVPFAkZA7xzWnrl1PFTP1mhBGq50iajx2Y3NDvqvIn6r1ScCHdN8nINL3x3hj3NJ+q9yY4EjIHeOa09cuZipHxaFbVrgNEDQjQQAQd8NxU3eQQVajg2QXu6yC95IA6gSx4/eCsDVJ6L3jPe/F25ZDLTVUalQnXQHIDoiMQMDT2dyntR7wP3WoN44oaRdti1d1cq4//HqN97gvS688cSdKdqNPzaNU/wALf6l6HQFh+EfCShZMDqrpc6cFNub3xrA3Ab3GAJ7QrjhBtVtpbVrl4JbRpuqEDIuwiQ0HrJgeK887V4QOcTdXJL61YyGjcBoxk9FjZj7yTIbBwq4bXV1LcXJUj/w2E5j9t+Rf3ZDsWolo6gqdS/ccywCd05jfmp6NcOmNRqOpBK6B1D0Vv8sbMAE9w+8qO0RzfLyn78Kn2fdYaZHJcoSSCQILGRBl8amd+gHblMroTUKof+fzn2Ko8AAk7vHyG9WVvRcyoMjhcHEaZ4SM8iQOlGu9Zm2cWPa6MQGo0JEjQnLcRn1+B7wmOWUluo5ytk3JtWobSta1lyIZFVoblhAIcDm/H259ucd2c4t+FD7CryVZxNpVcAXnSm85B/YNA7doZyz0Y2tWveP5JnJknEMWmHISSNZMae9TbQr1mNdQewAtd3jnCea7KREajJZMOHHgyuHHd7u/f+NU5ceX8v8Amye2v39vVy8+cdtP/eRMn9TS/q3HJdD4m+FPyu05Co6a1tDDJkvpH9W/PUwC09rZOq0Xjwb/ALxHbbUj/wBSqPgtLO5pUDoIgHLdl6H71mLWtbVRTp1RDgWtc93NJZiMta0ENkS0Y3zzcWQLWzjSFI9s5ESgy20dhspgPbcBjXEAY8bgScZEObTzbhZq0RMiTErGXFrUYcL2SRi6JB6Di1x1iAQQc1C3e+mSab3NnIjVrh1OaciOw5K7dteqWOpuEteS92CGF1QmS9+XO6sJkREQQCAtKN0WnJ5B6jl6FX1Lazh0gD3ZKwFRrsvQ5HyKhyPUSPd5HJBlX7aaPYcSqA2zVd0LcnxJ9AFjXNdIzGo3Hr71eUqz26SO4yPL8EFyH3bvZYz89pKmFjXPSuSPoj/wlLah0IB9D4gq6ZfNO+O/79EFCzaaVTk3Pc8PGJpcZOJvSGfZB8CsirDaebA9uZYQ9vbGontEhXVOqHAOGYIBHcVBUUJUJRBGUlSpKCZJUmJRCCZWAOAlsgRoZNOQdOdm1x3ZgaK9BVvegxiBILeogEtOuuR68+pUUHuw59HtP6Oe+oyWO8QqT3RztP2uhP8Aq0pafEKVz4O5pPfRcZ82PVN7sJk80neZoOP12zTd4oJiY5372k/6tHL7QVMu9r98f/tR/qapajsOZ5pO8jkye6rTlp8QrCrcYiCMtM4AcQXYS1xbEjI6oKlxdwThPO3uESMiRD2RiGR1CtCMz1k5+Jpz8VJu+r/bcfiqg1+t/caPggkOnhPpUKubcfxH3x8Fbez9X+3/ANyu7f4u/iKDp/EXTnaLj1WtX1q0Qu9riHELTm6ru6rePtVGn+ldvQaJx23GDZNZsxyj6NPzqtcR5NK4Ht8AXDBUJbTNKA6CYkPEgDqcfcux/wCIitFhQYDm66afs0avxLfJc22yKVSjTxMLsYDmlpa0tBAzBdlvGW/JBgrjaDHVGgGZa3E6cpAg5xB01GuWmihs2uXVnGMLcGnUJAbJO8w4qYbEY0iKk7xLc/erj5OymA3cX0w4k64yRLjGQ5sdmJBdlwcJDXEaSGuI7RI8VQoUHyC2sXU4gNOLKNOcxzTlOh6z1yszdbSp0Ww85kgtaznRERrAGm/tWEtL8urE7nHTLsAmAATJ1j8QuizAC92ZgCAIGugEk5nMkkk7zkrWjfVHgPxQHSWgAaAkTn3LJ3+TMUThIcR2DX0z8Frt5tHE6m0MGBjGs7ThEA6jPCGg7ubO9BnbLaB5RonDUEuY4b41EHumOydyp7bl8uc4yXAvLQC7DOZDR+dVg7SuXXFLICHDIEmBmXSTqYns0W6PNt8nw8i75QHn9ICMLml2KXZyXRzYjtXOpvYwXA3hF/s+8pXIJwB7qVXIjHQcRLsJznIPjrpgLdePCDfUnAgh1pTgjMEcrWMg+K55ti11IGQ17zoPKfMLpPArYlPbez6bX1nU7myHycOgOaaXSo4mZEgAloII6B1XQ5m4KUhblwh4u761lxo8tTHt0Zfl+0yMQ7coHWtLuKwblvPl4oDsgTE5I0K0rUyTOPPsJgdyq2taSWkzAkH894U2KzmA5EA9+ak5GNHEeo9fgqrqgb7QB1z7FCjpqD3GQqKDg6RpMjrG/wBFX5YjpNI7Rzh5j4hSvbzh3j3q7QWz3NcMiD3Z71UNLqJ9/vzVxQ2Y6u6KdF1RwE8xpc4fZzVB1JwkYtDEOExGo3Ge9BIHOGnoYPl+Kp2N25rGgEQBpH3Z+qqlx3t+yZ9DHxVvbZsbvyHbuQZKntP5zfLP03equad4w6OHu9+qw+D8/wDlQLe73IM/iSVgmPc3Qnu1Hloq9PaDt8H0P3eiDLSoyrKnftOsjvH3SrhtQHQg9xnzhBUlCVICkoMa6mWksaHQNA0h/N3TSfl1iR1K2fWDAYIAznAS3zo1Mnd+iyd4ymYNSI0z3T1eMLWqtYukkkxjAkkmMOQz+kgjWeTOQGeYAwgkOaJgZTzioTn4j+N5+Ce19Y/zWj4KVpyB7Af3ahQQ9n6v9to+Kn9rx/refgoEbvD+UFKTv7z/ADCgi3QdwHpSCurc5A959SVTtrdz3tYxjnuc4BrWguc44mZNaMyeacl3niy4qha8ndXoDq7YNOlMsoncXEZPqDyB0kwUFxxJ8GqlCi+6qjCbhrBTYRmKbZIe7qxF2Q6gDvgdNREHHP8AEZV/R2TOupVd9lrB/Wue2bWmm2nUaHAc6mSAR1luc5gyR2HLQreP8SB51h3XPvoLTtjEPt4Of4IMPeNBqElgMmceJ2JsRAAH5zUt+8kYgMQiHN62mDl+0CAQVPXt3uJw86N2/wAt6salctMaHq0I7wgpsrA+0wz8/ECM/wBkETukRqclWNxggMgu1LgCGjOQGh2ZzAMn5oVK0tKlxUFOlRdUqHMNptLnHthomO3Rb7sbid2jWg1eStmn57uUqfYZI83BBodS9qO1qO8zHlorapO4ru+zeI21bnXu61U7wwNpN9zj6rPWvFLslmtq5/a+tVPoHAIPN1rX5Ml0STlPUOxZG22k5xheiLniv2U9hb8hY2QRia54cOogh2q88cI9i1LC5qUHjouyPWNxHYRBHegzte3BowM8pneTvJWR4jtqmhtM0CYbc03MjdjpzUYfIVB9ZYDZW0g5mEnNWeyL8W+0KFYHoVmOPcHDF6Sg9YXVw2mx1R7g1jGlznHQBokk+C8z8Nb75Xd1rgtLcZhjSIIYBDcUe0QJOuZXZ+MKrUuH0Nl0jh+VOms+AcFBkudE7zhMd0b1kdncAtn0afJi0Y8HV1Qco8xpznZgd0aKDzTY7KqXNRtGjTLqjzzWNEkiJnqAjOd29XF9wauLN5FxRfTM4QXNIa7fzHaO8CvU+ztlULcEUaFOkDrgY1s95Az8VcV6LXtLXtDmnItcA4EdoORSQePr61JIcM4EEdkzI6+5UbYAO5rzExhP46L0ntvitsK8mmx1u876R5njTdLQPo4Vz3bfFLeUSXUeTuG/s8yp4scY8nFUc6f0h3j3q6Ub/Z1WlUDKlJ7H5c1zHNdkfmkSVGPu8kGf4HbTZRqObUMB8EO6i2cjHerXhTXZUuXvYZBDZPW4CCfKPJWuybZlWsym95a105iJJAkATlOp8FRurfA97MQdgc5sjQ4SRPpogoOVjat5jfoj3dayOFWNoOY36I9yCbD2n3/j6pn+cvfl6qJfnGHxU0IJD5e7zUpk7p9VUAUCzrGfkfPVBIWj8/jKlDeo/h4hVCPzr6fipXN/O/8APignbcvG8nvz/FVhtLraPOPQq2/P5Kkdu7/gUERULnSc+3d4BYsZg97vXAPispTfJyzHXu/FYujoO3/7sHwQVPa8R/NcfgpN31R/KJ+KmadO8H1qFSHT6v8AbaPign3/AFj/ADGj4K/4PbCr3tVtC3pl73ATuDW4SC97tGtGLU9wkkA5fgPwIudp1SKQwUmuipWcDhZzi6APbfEc0HeJIlek+CnBe32dRFG3ZGmN5zfUcBGJ7t/YNBuAQYbi/wCL2hs1uMxVuXDn1SIwzqykPZb26nedANzREBERBxr/ABHW8ssqnU6szxeKbh/LK5vwZuP0bm9S7dx37JNfZb3tEut3tr5fNEsqeAY9zvqrztsu65MnqIQZayuIqnvWRqWbLm7tqDpArVqdJzmxiDXvDSWkgiYO+Vq9G4589q3biutHXW17cxLaAdXd2BjS1v8A1HMQegNgbAtrKnyVtRbTbvgc5x63vObj2krJoiAiIgg4xmdFxLhRY1uENxVfZ02NtrVuAV3CHXNQGS2mdMMHI+Z5wA3vjevn0tl1+TMOqYaUzADajgHydwLcQndK2TYOyadpb0rek0BlNgaI3n2nHrLjJJ6yUHkjaFlVtqjqdRpY4GCCCD5FW2EkiASSRAGpJ0A7ZXrPhJwTtL9sXFEOO545rx9Ya9xla7sPiksLau2uDWqljg9jaj2ljXNza6GtBJBzzJCCpxi2lSg2ntSi+Kto2HtIkVKTjhIPaMTvBztCAVccC+MGhfuFFzTRrkOIYTia4NzJZUgSYzwkA5GJAJWwcJNkNvLWtbOcWiqwtxDVp1a7tggGN68z23L2lctJNO4tquW+HsOu7Ew/vNd1FB6qRY7g5tQXVrRuQ0s5Wm1+E+ySMx25zmsigIiICw+2uC9ndzy9sx7iIxxgqR2VWQ4eazCIOX7W4n6ZJda3T6Z+bUGNukQHthzR2nEtF2rxe7QthnamowDpUP0re4MAFT9xeikQeUHCCWnJwyLTk5p6iDmD3rGgHkRh1wCPJestq7Ft7kRcW9OqBpjYHFva1xzae0Lm/CfimqVatStbXDOeZFOo0tDd0Co3FIy+ag4NQ5TVrtMoJMLJ2ry4c4QQYK2ra/F9e0ZNSyc4D26Qx+P6I4o+kFrbaGCW5yDmDqD2jcgt672gEF0Za9XV7vRRoadIFU7ixLnyBM6idI6lI60cwiHuGfRcM47JzQXUKUhVCpSgkIVOq0GJE+u4qspHjMePuQQ+74LFUPZ8PWr+CyrtD3FYu3YThABJJaAAJJJe6AANScskEgOQ7h/C4/FdI4tuK6rfltxczStdRufXEN6HzWZdPfu1kbPxa8UQbhudosBMAstjmBlrX3E/safOnojs4EILfZ1hSt6baNGm2nTYIa1ogAffvnUq5REBERAREQU7ig2ox1N7Q5r2lrmnQtcIIPYQSvJnC7g0/Z95UtXzAOKk4/8AEpOJwO78oP7TSF63WE4UcFLXaDAy5pYsMljwcL2E64XjMAwJGhgSMkHk6hR5wABJJAAAkkkwAANSTuXpLim4GnZ9sX1mgXNeHVBrybROClPWJJMbydQArzgtxcWFg/laVJz6o0qVXY3Nn5ggNae0Ce1bcgIiICIiDH7f2RTu7epb1Wyyo2N4gjNrgRmCHAEdy863W2dpbMr1LR13UZUYWyA81GEYQWOZjBGEgjcNIIyhemlr/C3gda7RZFenzwIZVbzajO528Z9F0jsQaZwO42qdSKV8BTfoKzf1Z6uUbqw9oluvRXUKVQOAc1wc0iQQZBB0II1C818MOL282bNSOXtxnyrAZYP81mZZ3yW9o0VXgRw1q2LmCnVLqJeDUonNuEmXuZ818GZEAnWdwekloXGPwItrlrrvnU67cALmnKoA4NDHt7cQEiDkBmBC3HZ21KNeg24p1AaT24w880RvnFBbGYIOkLUdubRO0qwsbVxNJrg65rN6LWg9FrtMR3dvO0bJl8DYOBVsKVhasEwKFM5yc3NDjr2k5blmlLTYGgNAgAAADQAZABTKgiIgIiICIiAiIgKy2jsmhcCK1CnVH7bGujuJGSvUQaLtPip2fVksFSgTnzHyPs1MWXYIWp7T4nK7f1F1TqD5tRrqZ824gT4BdmRB5t2nwC2hQnFZ1HAb6cVQfBhLvMBa3XpljixzS1w1aQWuHe05hetlb3llSqtw1aTKjep7Q8eRCDyYQpHajx9y9IbQ4tdm1c/kopnrpOdTA+oDh9Fqu0+JSmf1F7UYf81jamu6WFiDkOzdn1Lmq2hRpuqPfkGtGcbySYAA3kkAda7txc8WdHZ4bWrYa11HSjmUpGYpA78yC85nsBIWwcEeCNts6nhosl7h+kquAxvPadzepoyHfJOwICIiAiIgIiICIiAiIgIiICIiAiIgIiIC0/a3FlsyuXuNqKb3mS6k51Mg55hoOATJnm5+SIglp8WdgDpWj5vKuj7Q53qto2bs6lb0xSo0m02DRrRAk6k9ZPWcyiKagukRFQREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf/Z",
        "alt": "xbox"
      },
      "Category": {
        "hidden": false,
        "Manufacturer": {
          "0": "Microsoft"
        },
        "Hard_Drive": {
          "0": "SSD"
        }
      }
    },
    "xboxone": {
      "test": {
        "hidden": false,
        "text": "",
        "bold": "This should be hidden."
      },
      "DefaultCategory": "Microsoft",
      "Name": {
        "hidden": true,
        "text": "XboxOne",
        "bold": "Name: "
      },
      "Link": {
        "hidden": false,
        "bold": "Link: ",
        "href": "https://www.xbox.com/en-US/",
        "alttext": "Xbox Official Site",
        "target": "_blank"
      },
      "Photo": {
        "hidden": false,
        "src": "https://img.game.co.uk/ml2/7/0/4/3/704348_scr2_a.png",
        "alt": "xboxone"
      },
      "Category": {
        "hidden": false,
        "Manufacturer": {
          "0": "Microsoft"
        },
        "Hard_Drive": {
          "0": "HDD"
        }
      }
    },
    "Switch": {
      "test": {
        "hidden": true,
        "text": "",
        "bold": "This should be hidden."
      },
      "DefaultCategory": "Nintendo",
      "Name": {
        "hidden": false,
        "text": "Nintendo Switch",
        "bold": "Name: "
      },
      "Link": {
        "hidden": false,
        "bold": "Link: ",
        "href": "https://www.nintendo.com/switch/",
        "alttext": "Nintendo Official Site",
        "target": "_blank"
      },
      "Photo": {
        "hidden": false,
        "src": "https://www.nintendo.com/switch/etRgxnAu0zRX4bmWnt9K628wG7YQUI6t/images/switch/buy-now/bundle_color_portable.jpg",
        "alt": "switch"
      },
      "Category": {
        "hidden": false,
        "Hard_Drive": {
          "0": "HDD"
        }
      }
    }
  }';
function json_validate($string)
{
    strip_tags($string);
    if(strpos($string,"[")!== false||strpos($string,"]"!==false)){
        exit('JSON should not contain arrays for security.');
    }
    // decode the JSON data
    $result = json_decode($string,true);

    // switch and check possible JSON errors
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            $error = ''; // JSON is valid // No error has occurred
            break;
        case JSON_ERROR_DEPTH:
            $error = 'The maximum stack depth has been exceeded.';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            $error = 'Invalid or malformed JSON.';
            break;
        case JSON_ERROR_CTRL_CHAR:
            $error = 'Control character error, possibly incorrectly encoded.';
            break;
        case JSON_ERROR_SYNTAX:
            $error = 'Syntax error, malformed JSON.';
            break;
        // PHP >= 5.3.3
        case JSON_ERROR_UTF8:
            $error = 'Malformed UTF-8 characters, possibly incorrectly encoded.';
            break;
        // PHP >= 5.5.0
        case JSON_ERROR_RECURSION:
            $error = 'One or more recursive references in the value to be encoded.';
            break;
        // PHP >= 5.5.0
        case JSON_ERROR_INF_OR_NAN:
            $error = 'One or more NAN or INF values in the value to be encoded.';
            break;
        case JSON_ERROR_UNSUPPORTED_TYPE:
            $error = 'A value of a type that cannot be encoded was given.';
            break;
        default:
            $error = 'Unknown JSON error occurred.';
            break;
    }

    if ($error !== '') {
        // throw the Exception or exit
        exit($error);
    }else{
        $error = json_schema_check($result);
        if ($error !== '') {
            // throw the Exception or exit
            exit($error);
        }
    }
    // everything is OK
    return $result;
}

/**Check schema specific errors
 * @param $result array from json string
 * @return string error message
 */
function json_schema_check($result){
    $keyarray =[];
    foreach ($result as $key => $product){
        //Product must have unique ID
        if(in_array($key,$keyarray)){
            return "Each product ID must be unique. {$key} is not unique.";
        }
        //DefaultCategory must exist for every product
        if(!array_key_exists("DefaultCategory",$product)){
            return "The DefaultCategory key not found and is required. {$key} does not contain DefaultCategory.";
        }
        foreach ($product as $type => $info){
            //Sorts key values to be used later for comparison
            if(is_array($info)){
                $index = array_keys($info);
                sort($index);
            }
            //case for each type
            switch (explode("_",$type)[0]){
                case "DefaultCategory":
                    if(is_array($info)){
                        return "Default Category cannot contain an array. {$key}->{$type} does not comply.";
                    }
                    break;
                case "Link":
                    if($index != ["alttext","bold","hidden","href","target"]){
                        return "The link element must only contain: bold\",\"href\",\"alttext\",\"target\",\"hidden\". {$key}->{$type} does not comply.";
                    }
                    if(!is_bool($info["hidden"])){
                        return "The hidden attribute must be a boolean. {$key}->{$type} does not comply.";
                    }
                    break;
                case "Photo":
                    if($index != ["alt","hidden","src"]){
                        return "The Photo element must only contain: \"src\",\"alt\",\"hidden\". {$key}->{$type} does not comply. ";
                    }
                    if(!is_bool($info["hidden"])){
                        return "The hidden attribute must be a boolean. {$key}->{$type} does not comply.";
                    }
                    break;
                case "Category":
                    if(!array_key_exists("hidden",$info)){
                        return "Category must contain: \"hidden\". {$key}->{$type} does not comply.";
                    }
                    if(!is_bool($info["hidden"])){
                        return "The hidden attribute must be a boolean. {$key}->{$type} does not comply.";
                    }
                    break;
                default:
                    if($index != ["bold","hidden","text"]){
                        return "The text element must only contain: \"text\",\"bold\",\"hidden\".{$key}->{$type} does not comply.";
                    }
                    if(!is_bool($info["hidden"])){
                        return "The hidden attribute must be a boolean. {$key}->{$type} does not comply.";
                    }
                    break;
            }
        }
    }
    return '';
}
json_validate($jsonstring);