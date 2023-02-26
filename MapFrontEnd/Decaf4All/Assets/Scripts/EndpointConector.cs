using Mapbox.Examples;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;
using Newtonsoft.Json;
public class EndpointConector : MonoBehaviour
{
    public string endpointURL;   
    public Store[] list;
    public SpawnOnMap spawnOnMap;
    public CardDrawer cardDrawer;
    private void Start()
    {
        StartCoroutine(GetStores());
    }

    private IEnumerator GetStores() 
    {
        using (UnityWebRequest request = UnityWebRequest.Get(endpointURL))
        { 
            yield return request.SendWebRequest();

            if (request.isHttpError || request.isNetworkError)
                Debug.LogError(request.error);
            else
            {
                Debug.Log("Success request");
                string text = request.downloadHandler.text;
                list = JsonConvert.DeserializeObject<Store[]>(text);                
                spawnOnMap.SpawnPOIs(list);
            }
        }
    }

    public void ShowData(int index)
    {
        cardDrawer.ShowData(list[index]);
    }
}
