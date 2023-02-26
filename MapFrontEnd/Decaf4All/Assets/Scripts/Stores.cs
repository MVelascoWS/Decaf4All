using System;
using UnityEngine;

[Serializable]
public class Store
{
    public int id { get; set; }
    public string siteLogo { get; set; }
    public string nameBusiness { get; set; }
    public string urlNegocio { get; set; }
    public string nameOwner { get; set; }
    public string email { get; set; }
    public int contactNumber { get; set; }
    public int cpBusiness { get; set; }
    public string calleAvenida { get; set; }
    public int noExteriorComercio { get; set; }
    public string paisBusiness { get; set; }
    public string estadoBusiness { get; set; }
    public string coloniaBusiness { get; set; }
    public string created_at { get; set; }
    public string updated_at { get; set; }
    public string cordenadas { get; set; }
}

[Serializable]
public class RootObject
{
    public Store[] stores;
}
