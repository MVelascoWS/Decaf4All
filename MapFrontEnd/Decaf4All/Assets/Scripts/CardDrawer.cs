using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using Doozy.Engine;
using TMPro;
using Doozy.Engine.UI;

public class CardDrawer : MonoBehaviour
{
    public TextMeshProUGUI nameB;
    public TextMeshProUGUI webPage;
    public TextMeshProUGUI owner;
    public TextMeshProUGUI email;
    public TextMeshProUGUI contactNumber;
    public TextMeshProUGUI cp;
    public TextMeshProUGUI address;
    public TextMeshProUGUI country;
    public TextMeshProUGUI state;
    public TextMeshProUGUI colony;
    public TextMeshProUGUI created;
    public TextMeshProUGUI updated;

    public UIButton button;
    public void ShowData(Store store)
    {
        nameB.text = store.nameBusiness;
        webPage.text = store.urlNegocio;
        button.OnClick.OnTrigger.Event.AddListener(OpenPage);
        owner.text = store.nameOwner;
        email.text = store.email;
        contactNumber.text = store.contactNumber.ToString();
        cp.text = "C.P. " + store.cpBusiness.ToString();
        address.text = store.calleAvenida + " " + store.noExteriorComercio;
        country.text = store.paisBusiness;
        state.text = store.estadoBusiness;
        colony.text = store.coloniaBusiness;
        created.text = "Creado en " + store.created_at;
        updated.text = "Editado en " + store.updated_at;
    }

    public void OpenPage()
    {
        Application.OpenURL(webPage.text);
    }
}
